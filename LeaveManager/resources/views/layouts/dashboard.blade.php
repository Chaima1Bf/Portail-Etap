@extends('layouts.app')
@section('title')
    Dashboard
@endsection

@section('content')

<section class="section">

   <!-- Card Section --> 
  <!-- 
      <div class="card">
      
      <div class="card-body">
        <h4 class="card-title">Bienvenu dans ton dashboard</h4>
        <p class="card-text" style="font-size: 17px">vérifier les nouveautés depuis votre dernière visite.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        <img class="img-fluid" src="{{URL::to('assets/images/OnPc.png')}}" alt="Card image cap" style="margin-left: 700px ;margin-top: -130px ;width: 22%;">
      </div>
    </div>
  -->

    <div class="col-13 grid-margin stretch-card">
      <div class="card corona-gradient-card">
        <div class="card-body py-0 px-0 px-sm-3">
          <div class="row align-items-center">

            <div class="col-5 col-sm-7 col-xl-8 p-4">
              <h4 class="mb-1 mb-sm-0">Bienvenu dans ton dashboard, {{Auth::user()->name}} </h4>
              <p class="mb-0 font-weight-normal d-none d-sm-block" style="font-size: 17px">Vérifier les nouveautés depuis votre dernière visite.</p>
            </div>
            <div class="col-4 col-sm-3 col-xl-2">
              <img src="{{URL::to('assets/images/OnPc.png')}}" class="gradient-corona-img img-fluid" style="margin-left: 120px;" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Nb Employés</h4>
            </div>
            <div class="card-body">
              {{$personnels}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Absences</h4>
            </div>
            <div class="card-body">
              {{$absence}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Reports</h4>
            </div>
            <div class="card-body">
              1,201
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Online Users</h4>
            </div>
            <div class="card-body">
              47
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 2 --> 
    <div class="row">
      <div class="col-lg-8 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Statistics</h4>
            <div class="card-header-action">
              <div class="btn-group">
                <a href="#" class="btn btn-primary">Week</a>
                <a href="#" class="btn">Month</a>
              </div>
            </div>
          </div>
          <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <canvas id="myChart" height="296" style="display: block; width: 488px; height: 296px;" width="488" class="chartjs-render-monitor"></canvas>
            <div class="statistic-details mt-sm-4">
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 7%</span>
                <div class="detail-value">$243</div>
                <div class="detail-name">Today's Sales</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 23%</span>
                <div class="detail-value">$2,902</div>
                <div class="detail-name">This Week's Sales</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>9%</span>
                <div class="detail-value">$12,821</div>
                <div class="detail-name">This Month's Sales</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 19%</span>
                <div class="detail-value">$92,142</div>
                <div class="detail-name">This Year's Sales</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-12 col-sm-12">
        <div class="card">
            <!-- List wrapper -->
            <div id="listWrapper">
             
                <!-- List title -->
                <div id="title">
                  <input id="titleInput" type="text" placeholder="My List" maxlength="21">
                  <i class="fa fa-pencil-alt"></i>
                </div>

                <div id="separator"></div>

                <!-- To do items -->
                <div id="itemsWrapper">
                  <div class="item">
                    <!-- New items are created here -->
                  </div>
                </div>
                
                <!-- Add a new item -->
                <div id="addNewItemWrapper">
                  <input type="text" id="addNewItemInput" maxlength="30">
                  <button id="addNewItemBtn"><i class="fas fa-plus"></i></button>
                </div>
                <br> <br>
                <div class="">
                  <button class="button-29" role="button">Ajouter</button>
                </div>
              
            </div>
        </div>
      </div>
    </div>




      <!-- Pie Chart -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Pie Chart</h4>
          </div>
          <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <canvas id="myChart4" style="display: block; width: 329px; height: 164px;" width="329" height="164" class="chartjs-render-monitor"></canvas>
          </div>
        </div>
      </div>



    </section>

     
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/56942480bb.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

   <style>
              /* CSS  Button*/
          .button-29 {
              
            align-items: center;
            appearance: none;
            background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #6874ec 100%);
            border: 0;
            border-radius: 6px;
            box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgb(104,116,236, .5) 0 -3px 0 inset;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-flex;
            font-family: "JetBrains Mono",monospace;
            height: 45px;
            justify-content: center;
            line-height: 1;
            list-style: none;
            overflow: hidden;
            padding-left: 16px;
            padding-right: 16px;
            position: relative;
            left: 120px;
            text-align: left;
            text-decoration: none;
            transition: box-shadow .15s,transform .15s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            will-change: box-shadow,transform;
            font-size: 18px;
          }

          .button-29:focus {
            box-shadow: #6874ec 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
          }

          .button-29:hover {
            box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
            transform: translateY(-2px);
          }

          .button-29:active {
            box-shadow: #6874ec 0 3px 7px inset;
            transform: translateY(2px);
          }
          /* Center the list */
                
          #listWrapper {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 9px;
            border: 1px solid #e7ecfb;
            box-shadow: 0 0 30px rgba(211, 220, 248, .3);
            padding: 30px;
          }

          /* List title */
          #title {
            position: relative;
            display: flex;
            align-items: center;
          }

          #titleInput {
            font-family: "Open Sans", sans-serif;
            font-size: 24px;
            font-weight: 800;
            border: 1px solid transparent;
            border-radius: 9px;
            color: #666f99;
            padding: 9px 18px;
          }

          #titleInput::placeholder {
            color: rgb(104,116,236, .4) ;
          }

          /* List title pencil */
          .fa-pencil-alt {
            font-size: 18px;
            border-radius: 50%;
            position: absolute;
            right: 24px;
            pointer-events: none;
            color: #6874ec;
          }

          /* Separator */
          #separator {
            margin: 12px 0;
            box-shadow: 0 12px 12px rgba(211, 220, 248, .3);
            border-top: 0;
            border-right: 0;
            border-left: 0;
            max-width: 100%;
            height: 10px;
          }

          /* To do items wrapper */
          #itemsWrapper {
            padding: 8px 8px;
            margin: 12px 0;
          }

          /* To do item */
          .item {
            width: 100%;
            font-size: 18px;
            font-family: "Open Sans", sans-serif;
            border-radius: 12px;
            border: 0;
            padding: 9px 12px;
            color: #6874ec;
            position: relative;
          }

          .itemInner {
            padding: 9px 0;
            display: flex;
            align-items: center;
            font-size: 16px;
          }

          .itemInner p {
            margin: 0;
            pointer-events: none;
          }

          /* Item buttons */
          .fa-trash-alt {
            pointer-events: none;
            color: #6874ec;
            font-size: 18px;
          }

          .removeItemBtn {
            position: absolute;
            right: 4px;
            background: transparent;
            border: 0;
            cursor: pointer;
            opacity: 0;
          }

          .fa-hand-point-right {
            color: #a8baf0;
            margin-right: 9px;
            font-size: 24px;
            cursor: pointer;
          }

          /* Add a new item section */
          #addNewItemWrapper {
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
          }

          #addNewItemInput {
            width: 100%;
            font-family: "Open Sans", sans-serif;
            font-size: 16px;
            font-weight: 600;
            border: 0;
            border-radius: 9px;
            color: #6874ec;
            padding: 12px 60px 12px 18px;
            background: #f3f5fc;
          }

          #addNewItemBtn {
            position: absolute;
            right: 0;
            height: 100%;
            padding: 0 18px;
            background: transparent;
            border: 0;
            color: #6874ec;
            cursor: pointer;
            font-size: 18px;
          }


   </style>


   <script>
      /* Submit on Enter */
      $("#addNewItemInput").on("keydown", (e) => {
        if (e.keyCode === 13) {
          $("#addNewItemBtn").click()
          $("#addNewItemInput").val("")
        }
      })

      $("#titleInput").on("keydown", (e) => {
        if (e.keyCode == 13) {
          $("#titleInput").blur();
        }
      })

      /* Add a new item */
      $("#addNewItemBtn").on("click", (e) => {
        if ($("#addNewItemInput").val() == "") {
          gsap.to("#addNewItemInput", .1, {x: -4})
          gsap.to("#addNewItemInput", .1, {delay: .1, x: 4})
          gsap.to("#addNewItemInput", .1, {delay: .2, x: -4})
          gsap.to("#addNewItemInput", .1, {delay: .3, x: 4})
          gsap.to("#addNewItemInput", .1, {delay: .4, x: 0})
        } else {
          const newItemInput = $("#addNewItemInput").val()
        
        $(".item").append(
          `<div class="itemInner">
            <i class="far fa-hand-point-right"></i>
            <p>${newItemInput}</p>
            <button class="removeItemBtn">
            <i class="fas fa-trash-alt"></i>
            </button>
          </div>`)
        
        $("#addNewItemInput").val("")
        
        const newItem = e.target

        gsap.to(".itemsWrapper, .item", .3, {paddingBottom: 30, ease: Back.easeOut})
        gsap.to(".itemsWrapper, .item", .3, {delay: .15, paddingBottom: 8, y: 0, ease: Back.easeOut})
        }
      })

      /* Completed item line through */
      $(".item").on("click", "i.fa-hand-point-right", (e) => {
        const handPoint = e.target
        const completedItem = e.target.parentElement
        const text = completedItem.getElementsByTagName('p')
        
        $(text).css({"text-decoration": "line-through"})
        gsap.to(handPoint, .3, {rotate: -30, transformOrigin: "center", ease: Back.easeOut})
        gsap.to(handPoint, .3, {delay: .15, rotate: 0, transformOrigin: "center", ease: Back.easeOut})
      })

      /* Remove item */
      $(".item").on("click", "button.removeItemBtn", (e) => {
          const removeItem = e.target
          const itemInner = removeItem.parentElement    
          $(itemInner).remove()
        
        gsap.to(".itemsWrapper, .item", 0, {paddingBottom: 52})
        gsap.to(".itemsWrapper, .item", .3, {paddingBottom: 8, ease: Back.easeOut})
      })

      /* Edit list title animation */
      gsap.set(".fa-pencil-alt", {opacity: 0, rotate: -180, transformOrigin: "center"})
      gsap.set("#titleInput, #addNewItemInput", {border: "1px solid transparent", boxShadow: "0 0 0 rgba(211, 220, 248, .3)"})

      $("#titleInput").on("mouseenter", () => {
          gsap.to(".fa-pencil-alt", .3, {rotate: 0, opacity: 1, transformOrigin: "center", ease: Back.easeOut})
      })

      $("#titleInput").on("mouseleave", () => {
        if ($("#titleInput").is(":focus")) {
          gsap.to(".fa-pencil-alt", .3, {rotate: 0, opacity: 1, transformOrigin: "center", ease: Back.easeOut})
        } else if (!($("#titleInput").is(":focus"))) {
          gsap.to(".fa-pencil-alt", .3, {rotate: -180, opacity: 0, transformOrigin: "center", ease: Back.easeOut})
        }
      })

      $("#titleInput").on("focus", () => {
        gsap.to(".fa-pencil-alt", .3, {rotate: 0, opacity: 1, transformOrigin: "center", ease: Back.easeOut})
        gsap.to("#titleInput", .3, {border: "1px solid #e7ecfb", boxShadow: "0 0 12px rgba(211, 220, 248, .3)"})
      })

      $("#titleInput").on("focusout", () => {
        gsap.to(".fa-pencil-alt", .3, {rotate: -180, opacity: 0, transformOrigin: "center", ease: Back.easeOut})
        gsap.to("#titleInput", .3, {border: "1px solid transparent", boxShadow: "0 0 12px rgba(211, 220, 248, 0)"})
      })

      /* Trash fade on item hover */
      $(".item").on("mouseenter", ".itemInner", (e) => {
        const trashBtn = $(e.target.querySelector(".removeItemBtn"))
        gsap.to(trashBtn, .3, {opacity: 1})
      })

      $(".itemInner").on("mouseenter", ".removeItemBtn", (e) => {
        const trashBtn = e.target
        gsap.to(trashBtn, .3, {opacity: 1})
      })

      $(".innerItem").on("mouseleave", ".removeItemBtn", (e) => {
        gsap.to(trashBtn, .3, {opacity: 0})
      })

      $(".item").on("mouseleave", ".itemInner", (e) => {
        const trashBtn = $(e.target.querySelector(".removeItemBtn"))
        gsap.to(trashBtn, .3, {opacity: 0})
      })

      $(".itemInner").on("mouseleave", ".removeItemBtn", (e) => {
        const trashBtn = e.target
        gsap.to(trashBtn, .3, {opacity: 0})
      })

      /* Add a new item animation */
      $("#addNewItemInput").on("focus", () => {
        gsap.to("#addNewItemInput", .3, {border: "1px solid #e7ecfb", boxShadow: "0 0 12px rgba(211, 220, 248, .3)"})
      })

      $("#addNewItemInput").on("focusout", () => {
        gsap.to("#addNewItemInput", .3, {border: "1px solid transparent", boxShadow: "0 0 12px rgba(211, 220, 248, 0)"})
      })

      $("#addNewItemBtn").on("mouseenter", () => {
        gsap.to(".fa-plus", .3, {rotate: 90, ease: Back.easeOut})
      })

      $("#addNewItemBtn").on("mouseleave", () => {
        gsap.to(".fa-plus", .3, {rotate: 0, ease: Back.easeOut})
      })
   </script>
@endsection

@section('chartscripts')
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js">
    </script>

    <script>
      
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
    </script>
@endsection