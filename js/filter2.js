document.querySelector(".button-value").onclick = function (e) {
     
    
      document.querySelectorAll(".1").forEach(function (el) {
        el.classList.remove("red");
      });
      e.target.classList.add("red");
      const classToFilter = e.target.classList[0];
      console.log(classToFilter);
      //allen verbergen
      const all = docment.querySelector("#grid").childeren;
      for (let i = 0; i < all.length; i++) {
        all[i].style.display = "none";
      }
      document.querySelectorAll(`.${classToFilter}`).forEach(function (el) {
        el.style.display = "block";
      });
    
  };