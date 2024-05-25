function showData(str) {
    if (str == "") {
      document.getElementById("all_property").innerHTML = "not selected any option";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","family.php?q="+str,true);
      xmlhttp.send();
    }
  }