<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Digital Clock</title>
      <link rel="icon" href="img/man.png" type="image/icon type">
      <link rel="stylesheet" href="css/clock.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="display">
            <div id="time"></div>
         </div>
         <span></span>
         <span></span>
      </div>



       <div class='bg'>
  <div class='cont'>
   <a href="http://localhost/AttendanceManagementSystem/main-page01.php">
  <button class='button'>
     <div class='blob'>
        <svg
        xmlns:xlink='http://www.w3.org/1999/xlink'
        version='1.1'
        xmlns='http://www.w3.org/2000/svg'
        viewBox='0 0 310 350'
      >
        <path d='M156.4,339.5c31.8-2.5,59.4-26.8,80.2-48.5c28.3-29.5,40.5-47,56.1-85.1c14-34.3,20.7-75.6,2.3-111  c-18.1-34.8-55.7-58-90.4-72.3c-11.7-4.8-24.1-8.8-36.8-11.5l-0.9-0.9l-0.6,0.6c-27.7-5.8-56.6-6-82.4,3c-38.8,13.6-64,48.8-66.8,90.3c-3,43.9,17.8,88.3,33.7,128.8c5.3,13.5,10.4,27.1,14.9,40.9C77.5,309.9,111,343,156.4,339.5z' />
  
        </svg>
      </div>
      <div class='line'></div>
      <div class='text'>
        <p>G</p>
        <p>O</p>
        <p>-</p>
        <p>H</p>
        <p>O</p>
        <p>M</p>
        <p>E</p>
      </div>
    </button>  
    </a>
</div>
  
   <p class="txt3">Created by sm_akil</p>
     <a href='https://www.linkedin.com/in/balazs-danyadi/'><i class="fab fa-linkedin fa-2x"></i>
       </div>




      <script>
         setInterval(()=>{
           const time = document.querySelector(".display #time");
           let date = new Date();
           let hours = date.getHours();
           let minutes = date.getMinutes();
           let seconds = date.getSeconds();
           let day_night = "AM";
           if(hours > 12){
             day_night = "PM";
             hours = hours - 12;
           }
           if(seconds < 10){
             seconds = "0" + seconds;
           }
           if(minutes < 10){
             minutes = "0" + minutes;
           }
           if(hours < 10){
             hours = "0" + hours;
           }
           time.textContent = hours + ":" + minutes + ":" + seconds + " "+ day_night;
         });
      </script>
   </body>
</html>