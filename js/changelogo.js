var onScrollHandler = function() {
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    var logobarber = document.getElementById("logobarber");
    if (scrollTop >= 10) {
        logobarber.src = "images/logo.png"
    }else{
        logobarber.src = "images/logo2.png"
    }
  };
  object.addEventListener ("scroll", onScrollHandler);