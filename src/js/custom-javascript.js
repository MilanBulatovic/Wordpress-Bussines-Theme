  //Animate entry content
  window.onscroll = () => {

    const Ypos = window.pageYOffset;

      //User scrolls more than 200px
      if(Ypos > 200) {

          //below = true;
          let about = document.querySelectorAll(".animate-entry");

          //Add animation class .entry
          for(var i = 0; i < about.length; i++) {
            about[i].classList.add('entry-content');

          }
      }

      //User scrolls more than 600px
      if(Ypos > 600) {

          //below = true;
          let invest = document.querySelectorAll(".drop-in");
          
          //Add animation class .visible
          for(var j = 0; j < invest.length; j++) {
            invest[j].classList.add('visible');
          }
      }
      

      
        //User scrolls up les than 200px
      //   else if(Ypos < 200 && below) {

      //     //Remove animation class .entry
      //      below = false;
      //      document.getElementById("animate-entry").classList.remove('entry');
      //      document.getElementById("animate-entry2").classList.remove('entry');
       
      //  }


  
    const mQuerie = ("(max-width: 700px)")
    const mobile = window.matchMedia(mQuerie)

    if (mobile.matches && Ypos > 10) { // If screen is tablet and mobile

          //below = true;
          let select = document.querySelectorAll(".animate-entry");

          //Add animation class .entry
          for(var i = 0; i < select.length; i++) {
            select[i].classList.add('entry-content');

          }
      }
  }  
