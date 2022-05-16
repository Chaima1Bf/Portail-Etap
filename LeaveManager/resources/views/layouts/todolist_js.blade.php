<script>


        $(document).ready(function(){
        var check_count = 0,
            total = 0;
        
        //Custom Functions
        function updateText(){
            $('#count').text(total);
            $('#count_done').text(check_count);
            $('#remaining_done').text(total-check_count);
        }
        function showDate(){
            var suffix = "", date = new Date(), dayOfMonth = date.getDate(), dayOfWeek = date.getDay(), Month = date.getMonth(),
                $today =  $('#today'),
                $daymonth =  $('#daymonth'),
                $month =  $('#month');

            var dayArray = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
            var monthArray = ["January","February","March","April,","May","June","July","August","September","October","November","December"];
            
            switch(dayOfMonth) {
                case 1: case 21: case 31: suffix = 'st'; break;
                case 2: case 22:          suffix = 'nd'; break;
                case 3: case 23:          suffix = 'rd'; break;
                default:                  suffix = 'th';
            }
            
            $today.text(dayArray[dayOfWeek] + ",");
            $daymonth.text(" " + dayOfMonth + suffix);
            $month.text(monthArray[Month]);
        }
        // Get the total number of "li's" and checked "li's"  
        function loadLi(){
            var findTheMarkedList = $('ul li');
            for (var i = 0; i < findTheMarkedList.length; i++)
            {
            total++;
            if ($(findTheMarkedList[i]).find('i').hasClass('fa-check-circle mark'))
            {
                $('li .right').eq(i).find('p').addClass('line-through').attr("contentEditable", false);
                check_count++;
            }
            }
            updateText();
        }
        
        $('ul li').each(function(j){
            var $this = $(this);
            $('.bottom').addClass('show');
            setTimeout(function () {
                $this.addClass('down_in').removeClass('lihiden');
                setTimeout(function () {
                    $this.removeAttr('class');
                }, 550);
            }, 60 * j );
            });
        
        // Click on button function add new item to list
        var li = "<li><a href='' class='check_button' onmousedown='return false'><i class='fa fa-circle-thin' aria-hidden='true'></i></a><div class='right'><p contenteditable='true'><strong></strong></p></div><span class='delete_button' onmousedown='return false'><i class='fa fa-times-circle' aria-hidden='true'></i></span></li>";
        
        $('.bottom #add-new').click(function(e){
            e.preventDefault();
            
            $('ul').append(li).find('li:last-child').addClass('down');
            
            total += 1;
            $('li:last-child p').text('New Task');

            updateText();
        });
        // Click on button function list
        $('.app ul').on('click','li .check_button',function(e){
            e.preventDefault();
            
            let button = $(this).find('i');
            let checked = 'fa fa-check-circle mark';
            let unchecked = 'fa fa-circle-thin';
            
            // Save the current index of button after the click event in the "left" div.
            let index_click = $('li .check_button').index(this);
            // Use the current index of button to target the correct "li p" in the "right" div.
            let linethrough_text = $('li .right').eq(index_click).find('p');
            
            if(button.hasClass(unchecked))
            {
            linethrough_text.addClass('line-through').attr("contentEditable", false);
            button.removeClass(unchecked + ' mark-alt').addClass('pop_in').addClass(checked);
            check_count += 1;
            }
            else
            {    
            linethrough_text.removeClass('line-through').attr('contentEditable', true);
            button.removeClass(checked).removeClass('pop_in').addClass(unchecked + ' mark-alt');
            check_count -= 1;
            }
            
            updateText();
        });
        // Click on button function and delete 'li'
        $('.app ul').on('click','li .delete_button',function(e){
            e.preventDefault();
            let index_click = $('li .delete_button').index(this);
            let current = $('li').eq(index_click);
            let button = $('.check_button').find('i');
            
           $(this).prop("disabled", true);
            total -= 1;
            
            if(button.eq(index_click).hasClass('mark'))
            {
            check_count -= 1;
            }
            
            current.addClass('up');
            setTimeout(function () 
            {
            current.remove();  
           }, 560); 
            
            $('#undo').removeClass('pop_out').addClass('pop_in').prop('disabled', false);
            
            updateText();
        });
        
        showDate();
        loadLi();
        });


</script>



    <!-- Style --> 
    <style>
        * {
   margin: 0;
   padding: 0;
}
body {
   background: #d2e3ed;
}
.wrapper {
   width: 100%;
   min-height: 960px;
}
.wrapper .align {
   width: 100%;
   height: 100%;
   margin: 0 auto;
   padding: 80px 0;
}
.wrapper .app {
   width: 375px;
   min-height: 200px;
   margin: 0 auto;
   border-radius: 22px;
   background: #fff;
   text-shadow: 0 0 1px rgba(0,0,0,0.1);
   letter-spacing: -1px;
   box-shadow: 0 5px 20px rgba(0,0,0,0.15);
   -webkit-backface-visibility: hidden;
   -webkit-user-select: none;
   -moz-user-select: none;
   user-select: none;
}
.wrapper .app .info {
   position: relative;
   height: 170px;
   width: auto;
   border-top-left-radius: 22px;
   border-top-right-radius: 22px;
   background: linear-gradient(135deg,rgba(158,15,184,0.7) -10%,rgba(5,232,255,0.8) 180%), url('https://static.vecteezy.com/system/resources/previews/000/101/253/non_2x/vector-free-abstract-background-1.jpg');
   background-size: cover;
}
.wrapper .app .info .date {
   position: relative;
   width: 100%;
   padding: 11px 0 5px 0;
}
.wrapper .app .info .date #day, .wrapper .app .info .date #month {
   text-align: center;
   font-size: 26px;
   color: #fff;
}
.wrapper .app .info .date #month {
   font-size: 16px;
}
.wrapper .app .info .date #today {
   font-weight: bold;
}
.wrapper .app .info .info-bottom {
   position: relative;
   height: 50px;
   width: 85%;
   margin: 40px auto 0 auto;
   text-shadow: 0 0 1px rgba(0,0,0,0.2);
}
.wrapper .app .info .info-bottom .left {
   float: left;
}
.wrapper .app .info .info-bottom .right {
   float: right;
}
.wrapper .app .info .info-bottom .middle {
   position: absolute;
   width: 140px;
   margin: 0 auto;
   left: 0;
   right: 0;
}
.wrapper .app .info .info-bottom #count, .wrapper .app .info .info-bottom #tasks, .wrapper .app .info .info-bottom #count_done, .wrapper .app .info .info-bottom #tasks_done, .wrapper .app .info .info-bottom #remaining_done, .wrapper .app .info .info-bottom #remaining_tasks {
   margin-top: 11px;
   font-size: 19px;
   color: #fff;
   font-weight: bold;
   text-align: center;
}
.wrapper .app .info .info-bottom #tasks, .wrapper .app .info .info-bottom #tasks_done, .wrapper .app .info .info-bottom #remaining_tasks {
   font-weight: normal;
   font-size: 18px;
   margin-top: -2px;
}
.wrapper .app ul {
   height: 100%;
   margin: 10px auto 10px auto;
}
.wrapper .app ul #today2 {
   width: 100%;
   height: 52px;
   margin: 10px auto;
   font-size: 18px;
   text-align: center;
   color: #636363;
   line-height: 52px;
}
.wrapper .app ul li {
   position: relative;
   display: flex;
   list-style: none;
   margin: 10px auto;
   width: 92%;
   min-height: 37px;
   line-height: 37px;
   color: #636363;
   -webkit-transition: all ease-in-out 0.35s;
   -moz-transition: all ease-in-out 0.35s;
   -o-transition: all ease-in-out 0.35s;
   transition: all ease-in-out 0.35s;
}
.wrapper .app ul li.lihiden {
   opacity: 0;
}
.wrapper .app ul li a {
   width: 35px;
   height: 30px;
   display: inline-block;
   color: #636363;
   text-decoration: none;
}
.wrapper .app ul li a i {
   position: absolute;
   top: 6px;
   left: 7px;
   -webkit-transition: all ease-in-out 0.5s;
   -moz-transition: all ease-in-out 0.5s;
   -o-transition: all ease-in-out 0.5s;
   transition: all ease-in-out 0.5s;
   font-size: 20px;
   font-weight: bold;
}
.wrapper .app ul li a .mark {
   color: #744bc0;
}
.wrapper .app ul li a .mark-alt {
   color: #636363;
}
.wrapper .app ul li a:hover > i {
   color: #744bc0;
}
.wrapper .app ul li .right {
   width: 80%;
   height: 100%;
   display: inline-block;
   margin: -3px auto 0 auto;
}
.wrapper .app ul li .right p {
   display: inline-block;
   width: 90%;
   height: 28px;
   word-wrap: break-word;
   line-height: 28px;
   outline: none;
   margin: 0;
   font-size: 15px;
   letter-spacing: -1px;
   font-weight: bold;
   -webkit-transition: all ease-in-out 0.25s;
   -moz-transition: all ease-in-out 0.25s;
   -o-transition: all ease-in-out 0.25s;
   transition: all ease-in-out 0.25s;
}
.wrapper .app ul li .right p span {
   cursor: text;
}
.wrapper .app ul li .right .line-through {
   color: #b3b3b3;
   text-decoration: line-through;
   font-style: italic;
}
.wrapper .app ul li span {
   display: inline-block;
   position: relative;
   width: 35px;
   height: 30px;
   cursor: pointer;
   -webkit-transition: all ease-in-out 0.35s;
   -moz-transition: all ease-in-out 0.35s;
   -o-transition: all ease-in-out 0.35s;
   transition: all ease-in-out 0.35s;
}
.wrapper .app ul li span i {
   font-size: 20px;
   transform: translate(9px,-1px);
}
.wrapper .app ul li span:hover > i {
   color: #24b5e2;
}
.wrapper .app .bottom {
   height: 80px;
   width: auto;
   margin-top: -300px;
   -webkit-transition: all ease-in-out 0.40s;
   transition: all ease-in-out 0.40s;
}
.wrapper .app .bottom.show {
   margin-top: -24px;
}
.wrapper .app .bottom a {
   display: block;
   width: 150px;
   height: 40px;
   line-height: 40px;
   margin: 40px auto 0 auto;
   padding: 0 10px;
   font-size: 18px;
   background: linear-gradient(135deg,rgba(158,15,184,0.9) -20%,rgba(5,232,255,0.9) 165%);
   color: #fff;
   border-radius: 20px;
   text-decoration: none;
   text-align: center;
}
.wrapper .app .bottom a i {
   margin-right: 5px;
}
.wrapper .app .bottom a:hover {
   background: linear-gradient(135deg,rgba(158,15,184,0.8) -20%,rgba(5,232,255,0.8) 165%);
}
.wrapper .app .bottom a:active {
   transform: translateY(1px);
   background: linear-gradient(135deg,rgba(158,15,184,0.9) -20%,rgba(5,232,255,0.9) 165%);
}
.wrapper .app .bottom #undo {
   width: 30px;
   height: 30px;
   border-radius: 100px;
   float: right;
   line-height: 30px;
   opacity: 0;
   cursor: default;
   margin-top: -54px;
   margin-right: 21px;
   pointer-events: none;
}
.wrapper .app .bottom #undo i {
   margin-left: 5px;
}
.down {
   -webkit-animation: slide_down .4s;
   -moz-animation: slide_down .4s;
   -o-animation: slide_down .4s;
   animation: slide_down .4s;
}
@keyframes slide_down {
   0% {
       opacity: 0;
       transform: scale(0);
       margin-top: -41px;
  }
   20% {
       opacity: 0;
  }
   80% {
       transform: scale(1.05);
  }
   100% {
       opacity: 1;
       transform: scale(1);
       margin-top: 10px;
  }
}
.up {
   -webkit-animation: slide_up .6s;
   -moz-animation: slide_up .6s;
   -o-animation: slide_up .6s;
   animation: slide_up .6s;
}
@keyframes slide_up {
   0% {
       opacity: 1;
       transform: scale(1);
       margin-top: 10px;
  }
   30% {
       opacity: 0;
  }
   100% {
       opacity: 0;
       transform: scale(0);
       margin-top: -45px;
  }
}
.down_in {
   -webkit-animation: down_in .35s;
   -moz-animation: down_in .35s;
   -o-animation: down_in .35s;
   animation: down_in .35s;
}
@keyframes down_in {
   0% {
       opacity: 0;
       transform: scale(.5) translateY(-55px);
  }
   70% {
       transform: scale(1.07);
  }
   100% {
       opacity: 1;
       transform: scale(1) translateY(0px);
  }
}
.pop_out {
   -webkit-animation: pop_out .25s;
   -moz-animation: pop_out .25s;
   -o-animation: pop_out .25s;
   animation: pop_out .25s;
}
.pop_in {
   -webkit-animation: pop_in .35s;
   -moz-animation: pop_in .35s;
   -o-animation: pop_in .35s;
   animation: pop_in .35s;
}
@keyframes pop_in {
   0% {
       opacity: 0;
       transform: scale(0);
  }
   70% {
       transform: scale(1.20);
  }
   100% {
       opacity: 1;
       transform: scale(1);
  }
}
#copyright {
   font-size: 15px;
   color: #8baec3;
   margin: 30px auto 0 auto;
   font-family: 'Noto Sans', sans-serif;
   text-shadow: 0 0 1px rgba(0,0,0,0.05);
   width: 250px;
   text-align: center;
}
#copyright a {
   text-decoration: none;
   color: #8baec3;
   -webkit-transition: all ease-in-out 0.35s;
   -moz-transition: all ease-in-out 0.35s;
   -o-transition: all ease-in-out 0.35s;
   transition: all ease-in-out 0.35s;
   letter-spacing: 0px;
}
#copyright a:hover {
   color: #fff;
}


  </style>



@push('child-scripts')
@include('layouts.todolist_js')
@endpush