
          function countdown() {
              var now=new Date();
              var eventDate=new Date("April 3,2018 00:00:00");

              var currentTime=now.getTime();
              var eventTime=eventDate.getTime();

              var remTime=eventTime-currentTime;

              var seconds=Math.floor(remTime/1000);
              var minutes=Math.floor(seconds/60);
              var hours=Math.floor(minutes/60);
              var days=Math.floor(hours/24);

              hours%=24;
              minutes%=60;
              seconds%=60;

              hours=(hours<10)?"0"+hours:hours;
              minutes=(minutes<10)?"0"+minutes:minutes;
              seconds=(seconds<10)?"0"+seconds:seconds;

              document.getElementById('days').innerHTML=days;
              document.getElementById('hours').innerHTML=hours;
              document.getElementById('minutes').innerHTML=minutes;
              document.getElementById('seconds').innerHTML=seconds;

          setTimeout(countdown,1000);
        }
       
        countdown();
  