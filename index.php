<html >
    
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">


<head>
    <link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/youtilyconstant.css"> 
    <link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/games/36T/36T.css">
    <link rel="shortcut icon"  href="http://<?php print $_SERVER['HTTP_HOST']; ?>/img/mainlogo.png" />

<script>
;(function () {
let src = '//cdn.jsdelivr.net/npm/eruda';
src = 'http://localhost:1111/eruda/eruda.min.js';
//src = res_addr+'/eruda/eruda.min.js';
//if (!/eruda=true/.test(window.location) && localStorage.getItem('active-eruda') != 'true') return;
document.write('<scr' + 'ipt src=' + src + '></scr' + 'ipt>');
document.write('<scr' + 'ipt>eruda.init();</scr' + 'ipt>');
})();
</script>
    <script src="http://<?php print $_SERVER['HTTP_HOST']; ?>/res/CodeHelps.js"> </script>
    <script src="http://<?php print $_SERVER['HTTP_HOST']; ?>/res/CDraw.js"> </script>
    <script src="http://<?php print $_SERVER['HTTP_HOST']; ?>/res/CDraw.vecs.js"> </script>
    <script src="http://<?php print $_SERVER['HTTP_HOST']; ?>/res/CDraw.vecs.polygoncirclecol.js"> </script>
    <script src="http://<?php print $_SERVER['HTTP_HOST']; ?>/res/CDraw.vecs.decomp.js"> </script>
</head>


 <meta name="theme-color" content="midnightblue"/>
 <meta name="title" content=" - design 20_"> <meta name="description" content="  design "> <meta name="keywords" content=" erotica, sci-fi, fantasy, relationship, advices, stories, read, write"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="aydavidgithere">
 <title > 36T  </title>
<noscript>Unfortunately, JavaScript must be enabled in your browser</noscript>
    </head>
    
    <body onload="run()">

             
             <div id="canvasDiv">
                 <canvas id="canvas" width="1280" height="675"> opps! Canvas net supported in your browser  </canvas>
             </div>

          <a class="transparentlink" href="index.php" >
      <div id="divtodesign20">   
              
      </div>
             </a>
             <empty> </empty>
    <div id="circle">
        rttt
    </div>
             <br10></br10>             <br10></br10>
             <a class="transparentlink" id="toSaveImage" >
             <button id="but" class="but">
                 Button
             </button>
             <button id="pause-but">This is a pause button</button>
             </a>
             <!--video id="record-video" controls loop style="width: 50%; position: absolute; bottom: 0px; left: 0px; transform: translateX(50%); " download="canvas-record-<?=rand(0,50);?>"></video-->
             
    
    
    </body>
    
    
    

 
<script>





function run(){ 
     let init = initWorld();
     window.Game = {canvas: init.canvas, context: init.context, paused: false}; 
     draw();
     addControls();
}
setCanvasStyle = function(a, settings){
        if(settings.type == "background"){
            a.width = a.parentNode.scrollWidth;
            a.height = a.parentNode.scrollHeight;
            //bad fixrs
            a.style.zIndex = -100;
            a.parentNode.style.overflow =
            (a.parentNode!=document.body?"hidden":0);
        }
        a.style.position = settings.position;
        if(settings.pinToTop ){
            if( a.style.position == "absolute" ||
            a.style.position == "relative"){
            a.style.top = 0+"%";
            a.style.left = 0+"%";
            }
            if( a.style.position == "static"){
            a.style.marginLeft = 0;
            a.style.marginTop = 0;
            }
        }//EO if
}
function initWorld(){ 
    let a = document.getElementById("canvas");
    let b = a.getContext("2d");
    setCanvasStyle(a, {type: "fill", alpha: 0, position: "static", pinToTop: true});   
    a.style.position = "absolute";
    a.style.top = "50%";
    a.style.left = "50%"
    a.style.display = "block";
    a.style.margin = "0 auto"
    a.style.transform = "translate(-50%,-50%)";
    return {canvas: a, context: b};
}
                 
                 
                 
                 
                 
                 






















let Skcp = function(main, scene){
    this.mainobj = main;
    this.respawn = (SKCPS)=>{
        let CW = Game.CW, CH = Game.CH;
        
        let after = null;
        if(SKCPS.list.length==0) {}
        else{
            after = SKCPS.getFarthest().mainobj;
            this.mainobj.x = after.x+after.lengthX*(1+(0.5+Math.random()));
        }   
        this.mainobj.lengthX = CW/(5+Math.random()*3);
        this.mainobj.breadthY = CH/(3-Math.random()*1.5)
        if(!after)
        this.mainobj.x = CW+this.mainobj.lengthX;
        this.mainobj.y = CH-this.mainobj.breadthY-CH/8;
        this.mainobj.alpha = 0.9+Math.random()*0.7;
        
        
        this.relight();
    }
    this.relight = ()=>{
        let obj = this.mainobj;
        let x = obj.x, y = obj.y, L = obj.lengthX, B = obj.breadthY;
        
        //PlaceLight
        let lposs = [];
        let ig = L/5, jg= B/20;
        for(let i=0; L-ig>i; i+=ig){
            for(let j=0; B-jg>j; j+=jg){
                lposs.push({x:x+i, y:y+j, l: L/ig, b:B/jg/2});
                //console.log("x: ", x+i, "y: ", y+j, "\nl: ", i, "b: ", j)
            }
        }
        //console.log("X: ", x, "Y: ", y, "\nL: ", L, "B: ", B);
        //console.log("x: ", x+i, "y: ", y+j, "\nl: ", i, "b: ", j)
        
        
        
        
        //Add light objs
        for(let k=0; 10>k; k++){
            if(this.lightsobjs.length < 10){
                let lightobj = new CDraw.rect(0,0,0,0,"_yellow");
                scene.add(lightobj);
                //lightobj.GCParams.shadow = [0.1, -0.1, "yellow", 2]
                this.lightsobjs.push(lightobj)
            }
            let lpos = lposs[Math.floor(Math.random()*lposs.length)];
            //console.log(lpos)
            let light_obj = this.lightsobjs[k];
            light_obj.x = lpos.x;
            light_obj.y = lpos.y;
            light_obj.lengthX = lpos.l;
            light_obj.breadthY = lpos.b;
            light_obj.alpha = 0.7+Math.random()*0.3
        }
        
        
        
        
    }
    this.lightsobjs = [];
    this.move = ()=>{
        if(Game.paused) return;
        let spd = Game.bgspeed;
        this.mainobj.x += spd;
        this.lightsobjs.map((lobj)=>{lobj.x += spd})
    }
}
let SKCPS = {
    list: [],
    leftlist: [],
    move: function(scene){
        SKCPS.list.map(s=>{
            s.move();
            if(s.mainobj.x+s.mainobj.lengthX<0) s.respawn(SKCPS);
        })
    },
    start: function(scene){
        function animate(){
            if(SKCPS.list.length < 5) SKCPS.create(scene);
            //if(SKCPS.list[SKCPS.list.length-1])
            SKCPS.move(scene);
            requestAnimationFrame(animate)
        }
        animate();
    },
    create: function(scene){
        let skcp = new Skcp(new CDraw.rect(0, 0, 0,8,`_#000200`), scene);
        SKCPS.list.push(skcp);
        scene.add(skcp.mainobj);
        skcp.respawn(SKCPS);
    },
    getFarthest: function(){
        let sort = SKCPS.list.sort((a,b)=>{
            return -(a.mainobj.x- b.mainobj.x);
        });
        return sort[0]
    }
}

let ROAD = {
    obj: null,
    make: function(scene){
        let CW = Game.CW, CH = Game.CH;
        let ro = new CDraw.polygon([], "2_red");
        ROAD.obj = ro;
        scene.add(ro);
        ro.points = [[0, CH-CH/8], [CW/1.42, CH-CH/3], [CW/1.09, CH-CH/3], [CW/0.9, CH-CH/8]];
        ro.GCParams.shadow = [1, -1, "red", 5];
        
        let pointsLength = 100;
        for(let i=1; pointsLength>i; i++){
            ro.points[i] = [];
            let point = ro.points[i];
            let pointpre = ro.points[i-1];
            point[0] = pointpre[0]+(CW/8)*(1.2+Math.random()*0.5);
            point[1] = CH-CH/8-(CH/6)*Math.random()*1.09;
            if(Math.random()>0.5) point[1] = pointpre[1];//same
            if(Math.random()>0.8) point[1] -= (CH/6)*Math.random()*1.09;
            if(i==pointsLength-1){  point[1] = ro.points[0][1]+0.5;  }
        } 
        let spliteds = [];
        //spliteds = CDraw.vecs.splitPolygonToConvex([...ROAD.obj.points]);
        for(let i=0; spliteds.length>i; i++){
            let spoints = spliteds[i];
            let spolygon =(new CDraw.polygon([],"1_rgba(200,200,0,0.5)"));
            spolygon.points = JSON.parse(JSON.stringify(spoints));
            scene.add(spolygon);
            if(!ROAD.trackobj) ROAD.trackobj = [];
            ROAD.trackobj.push(spolygon)
        } 
    
    
    
        ROAD.move();
    },
    move: function(){
        if(!Game.paused)
        ROAD.obj.points.map(p=>{
            let spd = Game.bgspeed;
            p[0] += spd;
        });
        if(!Game.paused)
        if(ROAD.trackobj)
        ROAD.trackobj.map(spolygon=>{
            spolygon.points.map(p=>{
                let spd = Game.bgspeed;
                p[0] += spd;
            });
        })
        requestAnimationFrame(ROAD.move)
    }
}

let Car = function(){
    this.objs = {
        list: {},
        add: (object, objectkey)=>{
            let ctx = this.objs;
            ctx.list[objectkey] = {object, index: ctx.getLength()};
            ctx[objectkey] = object;
        },
        remove: (objectkey)=>{
            let ctx = this.objs;
            //ctx[objectkey].
        },
        getAll: (callback)=>{
            let ctx = this.objs;
            Object.keys(ctx.list).map((key, ind)=>{
                let object = ctx.list[key].object;
                let objectind = ind;
                let objectname = key
                callback(object, objectind, objectname);
            });
        },
        getLength: ()=>{
            let ctx = this.objs;
            return Object.keys(ctx.list).length;
        }
    };
    this.pos = {};
}
function draw(){
    let logger = DOM$._("#circle")
    let {canvas: a, context: b} = Game;
    let wh = (window.screen.width<601?4*90/1.25:(window.screen.width<901?500:690))*1.1;
    let CW = a.width = wh;
    let CH = a.height = wh;
    let CR = MATH$.resultantOf(CW, CH);
    Game.CW = CW, Game.CH = CH;
    let scene = new CDraw.useScene(b);
    let bgRect = new CDraw.rect(0,CW,0,CH,"_#000827");
    scene.add(bgRect);
    let nightskycolor = b.createLinearGradient(0, 0, 0, CH);
	nightskycolor.addColorStop(0, "black")
    nightskycolor.addColorStop(1, "midnightblue")
    bgRect.color = nightskycolor;
    
    
    
    
    
    
    //PROPS
    Game.bgspeed = -1;
    
    
    ///CAR
    let car = new Car();
    Game.car = car;
    car.pos.x = CW/8; 
    car.pos.y = CH-CH/5*1.2;
    car.pos.length = CW/10*2;
    car.pos.breadth = car.pos.length/6;
    car.gravity = 1/0.7; //change to me made with gravity
    car.speed = 1;
    car.speed_inc = -1;
    
    let carObjs = car.objs
    carObjs.add(new CDraw.arc(0, 0, car.pos.length/10, 0, 8, "1_white"),"tyre1");
    carObjs.add(new CDraw.arc(0, 0, car.pos.length/10, 0, 8, "1_white"),"tyre2");
    carObjs.add(new CDraw.rect(0, car.pos.length/10, 0, 8, "1_white"),"body");
    let carTyre1 = carObjs.tyre1, 
    carTyre2 = carObjs.tyre2;
    carBody = carObjs.body;
    

    carTyre1.radius = car.pos.length/10;
    carTyre2.radius = car.pos.length/10;
    carTyre1.x = car.pos.x+car.pos.length/5;
    carTyre2.x = car.pos.x+4*car.pos.length/5;
    carTyre1.y = car.pos.y-carTyre1.radius;
    carTyre2.y = car.pos.y-carTyre2.radius;
    carBody.x = car.pos.x; 
    carBody.lengthX = car.pos.length;
    //reactive
    carBody.y = ((carTyre2.y-carTyre2.radius*2)+(carTyre1.y-carTyre1.radius*2))/2;
    carBody.breadthY = car.pos.breadth;
    carBody.rotation.rad = 0;
    carBody.rotation.rad += Math.asin((carTyre2.y-carTyre1.y)/(carTyre2.x-carTyre1.x))
    
    
    
    
    
    
    
    
    
    //TEST
    let ply = null;
    
    
    
    //SKYSCRAPERS
    SKCPS.start(scene);
    
    let trect1 = null, trect2 = null;
    setTimeout(()=>{
        carObjs.getAll((obj)=>{
            scene.add(obj)
        });
        let baseLine = new CDraw.sLine(0, CW, CW-CW/8, 0,  "red", 2);
        scene.add(baseLine);
        baseLine.GCParams.shadow = [1, -1, "red", 5];
        //ROAD
        ROAD.make(scene);
        //TEST
        trect1 = new CDraw.rect(CW/2, 30, CH/2,  8, "_white");
        trect1.alpha = 0.5;
        scene.add(trect1);
        trect2 = new CDraw.rect(CW/2, 30, CH/2,  8, "_white");
        trect2.alpha = 0.5;
        scene.add(trect2);
        
        
        
        
        //TEST
        ply = new CDraw.polygon([], "_yellow");
        scene.add(ply);
        function rdm(){ return Math.random()*1*(CW/5)}
        ply.points = [];// [[CW/1.2+rdm(), CH/2+rdm()], [CW/1.5+rdm(), CH/4.5+rdm()], [CW/2+rdm(), CH/5+rdm()]];
    },2000);
    
    
    
    
    
    
    
    
    
    
    
    function animate(){
        if(!Game.paused) redraw();
        
        
        
        logger.innerText = logger.text;
        requestAnimationFrame(animate)
    }
    animate();
    
    
    function redraw(){
        //TO RESET SPEED
        if(!Game.bgspeedinc)
        if(car.speed_inc < -0.1){
            car.speed_inc += 0.1;
            car.color = "yellow";
            carObjs.getAll((obj)=>{
                obj.color = car.color;
            });
        }
        //TO INCREASE SPEED
        if(Game.bgspeedinc)
        //UNTIL MAXIMUM
        if(car.speed_inc>-3){
            car.speed_inc -= 0.5;
            car.color = "white";
            carObjs.getAll((obj)=>{
                obj.color = car.color;
            });
        }
        //TO RESET SPEED
        if(!Game.bgspeeddcs)
        if(car.speed_inc > 0.1){
            car.speed_inc -= 0.1;
            car.color = "white";
            carObjs.getAll((obj)=>{
                obj.color = car.color;
            });
        }
        //TO DECREASE SPEED
        if(Game.bgspeeddcs)
        //UNTIL MAXIMUM
        if(car.speed_inc < 3){
            car.speed_inc += 0.5;
            car.color = "green";
            carObjs.getAll((obj)=>{
                obj.color = car.color;
            });
        }
        //USE SPEED
        car.speed = car.speed_inc;
        
        
        
        
        
        
        /****CDraw****/
        if(ROAD.obj){
        let pcwc2 = {yes:null};
        let pcwc1 = {yes:null};
        pcwc2 = CDraw.vecs.polygonCollidesWithCircle_concave({points: JSON.parse(JSON.stringify(ROAD.obj.points))}, carTyre2);
        pcwc1 = CDraw.vecs.polygonCollidesWithCircle_concave({points: JSON.parse(JSON.stringify(ROAD.obj.points))}, carTyre1);
        pcwc2.deg = -Math.atan(pcwc2.axis.x/pcwc2.axis.y);
        pcwc1.deg = -Math.atan(pcwc1.axis.x/pcwc1.axis.y);
        
        
        
        
        
        
        
        
        
        
        
        logger.text = "";
        logger.text += " \n  deg2: "+pcwc2.deg+"   deg1: "+pcwc1.deg
        //logger.text += "\n "+ pcwc2.yes+" "+pcwc2.axis.x+"   "+pcwc2.axis.y+"    "+pcwc1.yes+" "+pcwc1.axis.x+"  "+pcwc1.axis.y;
        //logger.text += "\n "+Math.cos(45)+" "+Math.cos(45*Math.PI/180);
        
        
        //TESTERS
        function axisTester(){
            trect2.x = carTyre2.x;
            trect2.y = carTyre2.y;
            trect2.rotation.rad = pcwc2.deg//*Math.PI/180;
            if(pcwc2.yes) trect2.color = "green";
            else trect2.color = "white";
            //
            trect1.x = carTyre1.x;
            trect1.y = carTyre1.y;
            trect1.rotation.rad = pcwc1.deg//*Math.PI/180;
            if(pcwc1.yes) trect1.color = "green";
            else trect1.color = "white";
        }
        
        
        
        
        
        //CARTYRE COLLISION X
        carTyre2.colFX = 0;
        carTyre1.colFX = 0;
        if(pcwc2.yes) carTyre2.colFX = -(1+pcwc1.overlap)*Math.sin(pcwc2.deg);
        if(pcwc1.yes) carTyre1.colFX = -(1+pcwc1.overlap)*Math.sin(pcwc1.deg);
        //CAR MOVEMENT X
        car.speed = car.speed_inc+(carTyre2.colFX/2+carTyre1.colFX/2);
        document.querySelector("#but").innerText = carTyre2.colFX;
        
        
        //CARTYRE COLLISION Y
        carTyre2.colFY = 0;
        carTyre1.colFY = 0;
        if(pcwc2.yes) carTyre2.colFY = -(car.gravity/3+pcwc2.overlap)*Math.cos(pcwc2.deg) + -1*car.speed_inc*Math.sin(pcwc2.deg);
        if(pcwc1.yes) carTyre1.colFY = -(car.gravity/3+pcwc1.overlap)*Math.cos(pcwc1.deg) + -1*car.speed_inc*Math.sin(pcwc1.deg);
        
        
        
        
        
        //CAR MOVEMENT Y
        carTyre2.y += (car.gravity+carTyre2.colFY);
        carTyre1.y += (car.gravity+carTyre1.colFY);
        
        
        
        //reactive
        carBody.y = ((carTyre2.y-carTyre2.radius*2)+(carTyre1.y-carTyre1.radius*2))/2;
        carBody.rotation.rad = 0;
        carBody.rotation.rad += Math.asin((carTyre2.y-carTyre1.y)/(carTyre2.x-carTyre1.x));
        if(carBody.rotation.rad < -Math.PI/6) carBody.rotation.rad = -Math.PI/6;
        
        
        
        //MOVE
        
        ply.points = pcwc2.splitPoints;
        ply.points.map(point=>{point[0] += Game.bgspeed;})
        }
        
          
        Game.bgspeed = car.speed;
    }
    
    
    
    
    
    
    
    
    
}//EO draw    
function addControls(){
    //let recorder = new Recorder(Game.canvas, document.querySelector("#record-video"));
    //recorder.start();
    Game.canvas.ontouchstart = function(e){
        e.preventDefault();
        if(e.touches[0].pageX>Game.CW/2) Game.bgspeedinc = true;
        if(e.touches[0].pageX<Game.CW/2) Game.bgspeeddcs = true;
    }
    Game.canvas.ontouchend = function(e){
        e.preventDefault();
        //alert( Game.bgspeeddcs+" "+Game.bgspeedinc)
        Game.bgspeedinc = false;
        Game.bgspeeddcs = false;
    }
    Game.canvas.addEventListener("touchstart", Game.canvas.ontouchstart);
    Game.canvas.addEventListener("touchend", Game.canvas.ontouchend);
    document.onkeydown = function(e){
        if(e.key==" "&&e.keyCode=="32"&&e.code=="Space") document.querySelector("#but").click();
        if(e.key=="a"||e.keyCode=="65"||e.code=="keyA"){ e.touches=[{pageX: Game.CW/2-50}]; Game.canvas.ontouchstart(e); }
        if(e.key=="d"||e.keyCode=="68"||e.code=="keyD"){ e.touches=[{pageX: Game.CW/2+50}]; Game.canvas.ontouchstart(e); }
    }
    document.onkeyup = function(e){
        if(e.key=="a"||e.keyCode=="65"||e.code=="keyA"){ e.touches=[{pageX: Game.CW/2-50}]; Game.canvas.ontouchend(e); }
        if(e.key=="d"||e.keyCode=="68"||e.code=="keyD"){ e.touches=[{pageX: Game.CW/2+50}]; Game.canvas.ontouchend(e); }
    }
    document.querySelector("#pause-but").onclick = function(){
        Game.paused = !Game.paused;
        //recorder.stop()
    }
    document.querySelector("#but").onclick = function(){
        Game.car.objs.tyre2.y -= 70;
        Game.car.objs.tyre1.y -= 70;
    }
    
}     
      
      
      
      
      
      
      
      
function Recorder(canvas, video=null){
  let stream = canvas.captureStream(60); 
  let recorder = new MediaRecorder(stream);
  recorder.addEventListener('dataavailable', finishCapturing);
  startCapturing();
  function startCapturing() {
    capturing = true;
  }
  function finishCapturing(e) {
    capturing = false;
    var videoData = [ e.data ];
    var blob = new Blob(videoData, { 'type': 'video/mp4' });
    var videoURL = URL.createObjectURL(blob);
    if(video){ video.src = videoURL; video.play() }
    console.log("Finished Capturing... ", video, video.src)
  }
  this.stop = function(){
      console.log("Stopped Recording...")
      recorder.stop();
  }
  this.start = function(){
      console.log("Started Recording...")
      recorder.start();
  }
}//EO Recorder
      
      
      
      
      
      
      
      /* PROBLEMS
       * 1. INDECISION IN COLLISION #########
       * 2. POLYGON BOTTOM SOMETIMES PREFERED FOR COLLISION   ######
       * 3. TYRE ROTATION WITH BODY
       * 4. CLIMBING GOES FAST INSTEAD OF SLOW
       */
      
        
        
</script>
    
    
    
    
    
    
    
    
<log1 log></log1>
<log2 log></log2>
<log3 log></log3>
<log4 log></log4>
<log5 log></log5>
<log6 log></log6>

    
</html>  
