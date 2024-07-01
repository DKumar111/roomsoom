let allWrap = document.getElementsByClassName("slider");

for (let i = 0; i < allWrap.length; i++) {
  allWrap[i].classList.add("mySlider_" + i);

  let slider = new Slider(".mySlider_" + i);
  slider.addListeners();
}

function Slider(newclass) {
  this.buttons = document.querySelectorAll(newclass + " button");
  this.items = document.querySelectorAll(newclass + " .item");
  this.activeItem = 0;
  this.isSliding = false;

  this.addListeners = function () {
    this.buttons.forEach((el) => el.addEventListener("click", this.slide));
  };

  this.slide = (event) => {
    if (!this.isSliding) {
      this.isSliding = true;
      let currentItem = this.activeItem;

      if (event.target === this.buttons[1]) {
        this.activeItem === this.items.length - 1
          ? (this.activeItem = 0)
          : this.activeItem++;
        //active slide out left
        this.items[currentItem].classList.add("active-left");
        //next slide in left
        this.items[this.activeItem].classList.add("item-next", "item-left");
        //remove classes
        setTimeout(() => {
          this.items[currentItem].classList.remove("active-left", "active");
          this.items[this.activeItem].classList.remove(
            "item-next",
            "item-left"
          );
          //set new active item
          this.items[this.activeItem].classList.add("active");
          this.isSliding = false;
        }, 1000);
      } else {
        this.activeItem === 0
          ? (this.activeItem = this.items.length - 1)
          : this.activeItem--;
        //active slide out right
        this.items[currentItem].classList.add("active-right");
        //prev slide in right
        this.items[this.activeItem].classList.add("item-prev", "item-right");
        //remove classes
        setTimeout(() => {
          this.items[currentItem].classList.remove("active-right", "active");
          this.items[this.activeItem].classList.remove(
            "item-prev",
            "item-right"
          );
          //set new active item
          this.items[this.activeItem].classList.add("active");
          this.isSliding = false;
        }, 1000);
      }
    }
  };
}

$("#like_Btn").on("click", function () {
  $("#icon").toggleClass("red");
  $("#icon").toggleClass("fa-solid");
});

$(".button").on("click", function (e) {
  e.preventDefault();
});

$(".addtowishlist").on("click", function (e) {
  e.preventDefault();
    let wishlist = $(this).data("data");
    console.log(wishlist);
    $.ajax({
        url : "phpScript/ajax_wishlist.php",
        type : "POST",
        data : ({property_id: wishlist}),
        success : function (data){
            confirm('You liked this property' + " " + wishlist)
        }
    })
});
