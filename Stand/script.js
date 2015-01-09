var canvas = document.getElementById('canvas');
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;
	
	var c = document.getElementById('canvas');
	var ctx = c.getContext('2d');
	
	//declaring image variables
	var menu_background = new Image();							//background
	menu_background.src = "Menu.png";
	var game_background = new Image();
	game_background.src = "InGame.png";
	
	var pass_background = new Image();
	pass_background.src="pass.png";
	var correct_background = new Image();
	correct_background.src="correct.png";

	var w = canvas.width;
	var h = canvas.height;
	var inMenu = true;

	//global categories arrays
	var usedArrays = [1];
	var arrays;
	var collegeTeams = ["Florida Gators","LSU Tigers","Tenessee Volunteers","Georgia Bulldogs","Oregon Ducks","Florida State Seminoles","Arkansas Razorbacks",
			"Alabama Crimson Tide","South Carolina Gamecocks","Ole Miss Rebels","Kentucky Wildcats","Texas A&M Aggies","Michigan Wolverines","Michigan State Spartans",
			"Texas Longhorns","Ohio State Buckeyes","Notre Dame FIghting Irish","Duke Blue Devils","Nebraska Cornhuskers","TCU Horned Frogs"];
	

	window.onload = function(){
		loadMenu();
		listenForFingers();
	};		//starts everything

function listenForFingers(){ 
 c.addEventListener('touchstart', mobileClick, false);   
}

function mobileClick(e){
  isMobile = true;
  touchobj = e.changedTouches[0] // reference first touch point (ie: first finger)
  /*if(!GameOver){
    e.preventDefault();
  }*/
  mobileClickX = parseInt(touchobj.clientX); // get x position of touch point relative to left edge of browser
  mobileClickX = mobileClickX - (window.innerWidth-canvas.width)/2;
  mobileClickY = parseInt(touchobj.clientY);
  mobileClickY = mobileClickY - 25;
  
  
  if(inMenu){
	menuClick(mobileClickX, mobileClickY);
  }
  else if(inGame){
	gameClick(mobileClickX, mobileClickY);
  }
  
  
  /*function getMousePos(canvas, evt) {
        var rect = c.getBoundingClientRect();
        return {
          x: evt.clientX - rect.left,
          y: evt.clientY - rect.top
        };*/
}

function gameClick(mobileClickX, mobileClickY){

}


function loadMenu(){
    Menu();     
    //updateScore();
}



function Menu(){ 
  ctx.drawImage(menu_background, 0, 0, w, h); 
  c.addEventListener("click", menuClick); 
}




/*window.addEventListener("keydown", function (e) {    			//listens for key press
	if((e.keyCode===40 || e.keyCode===83) && d!=="up"){
		dn="down";
	}
	else if((e.keyCode===39 || e.keyCode===68)&& d!=="left"){
		dn="right";
	}
	else if((e.keyCode===38 || e.keyCode===87)&& d!=="down"){
		dn="up";
	}
	else if((e.keyCode===37 || e.keyCode===65)&& d!=="right"){
		dn="left";
	}
    if(GameOver){
        goToMenu();
    }
});
*/

 var isMobile = false; //boolean for whether or not the device is mobile
 var mobileClickX = 0; 
 var mobileClickY = 0;
 var touchobj;
 
 var game = new Object();
 game.displayPassFailTime=false;
 game.originalTimeOfRound=30;
 game.passNotCorrect=false;
 
 function startGame(){
	inGame=true;
	//var originalDate = new Date();
	//var originalTime = originalDate.getTime();
	var originalTimeOfRound = 30;//in seconds
	gameLoop(originalTimeOfRound);
	
	
 }
 function drawPassFailScreen(){
	if(game.displayPassFailTime == 0){	//should only be zero first time method is called
		game.displayPassFailTime=1000;
	}
	if(game.displayPassFailTime == 1000){ //only draw once
		clearCanvas();
		if(game.passNotCorrect){
			ctx.drawImage(pass_background, 0,0,w,h);
		}
		else{
			ctx.drawImage(correct_background, 0,0,w,h);
		}
	}
	game.displayPassFailTime -= 10;		//decrementing time left for displaying pass/fail
	if(game.displayPassFailTime <= 0){
		game.displayPassFail = false;//stops this method from being called again
	}
 }
 
 function gameLoop(timeOfRound){		//this 
	if(inGame){
		if(game.displayPassFail){	//for displaying pass/fail screen when tilting
			drawPassFailScreen();			
		}
		else{
			clearCanvas();
			ctx.drawImage(game_background, 0,0,w,h);
			printWord();		
			printTime(timeOfRound);
		}
		
		setTimeout(function(){gameLoop(timeOfRound-.01);	}, 10);
		//gameLoop();
	}
 }
 function clearCanvas(){
	ctx.clearRect(0, 0, w, h);
 }
 
 
 function printTime(timeLeft){
  ctx.font         = "bold 40px Arial";
  ctx.textBaseline = 'bottom';
  ctx.textAlign = 'center';
    
  ctx.save();
  ctx.translate(0,h*3/4); //new origin
  ctx.rotate(-Math.PI / 2);  
  ctx.fillStyle = "white";
  ctx.fillText( 'TIME REMAINING: ' + Math.floor(timeLeft), h/4, w*3/4); 
  ctx.restore();
  
 }
 
 var alpha=0;
 var beta=0;
 var gamma=0;
 
 window.ondeviceorientation = function(event) {
  alpha = Math.round(event.alpha);
  beta = Math.round(event.beta);
  gamma = Math.round(event.gamma);
  
  if (gamma > 125){
	game.displayPassFail = true;
	game.passNotCorrect= false;
  }
  else if(gamma< 55){
	game.displayPassFail = true;
	game.passNotCorrect= true;
  }
}
 
 function printWord(){
  ctx.font         = "bold 80px AG Book Rounded";
  ctx.textBaseline = 'middle';
  ctx.textAlign = 'center';
    
  ctx.save();
  ctx.translate(0,h*3/4); //new origin
  ctx.rotate(-Math.PI / 2);   
  ctx.fillStyle = "blue";
 // ctx.fillText( 'alpha: '+alpha, h/4, w/2); 
 // ctx.fillText( 'beta: '+beta, h/4, w/2); 
  ctx.fillText( 'gamma: '+gamma, h/4, w/2); 
  ctx.restore();
 }
 
 function menuClick(X,Y){
	if(Y>(250/667*h)){
		c.removeEventListener("click", menuClick);
		startGame();
		inMenu = false;
	}
 }
 


function menuClickOld(){
  if (mousePos.y>h/4){
    //c.removeEventListener('click', menuClick, false);
    //c.removeEventListener('mousemove', menuMove,false);
    startButton(c);    
  }
  else if (mousePos.y<2*h/4){
    c.removeEventListener('click', menuClick, false);
    c.removeEventListener('mousemove', menuMove,false);
    help(c);    
  }
  else if (mousePos.y<3*h/4){
    c.removeEventListener('click', menuClick, false);
   //c.removeEventListener('mousemove', menuMove, false);
    highScore(c);    
  }  
  else{
	menuBool = true;
	if(difficulty < 2)
        difficulty++;
    else
        difficulty = 0;
    if(isMobile){    
        ctx.clearRect(0, 3*h/4, w, h/4);    
        ctx.drawImage(difficultyButton[difficulty], 0, 3*h/4, w,h/4);  
    }
	
    /*options(c);
    c.removeEventListener('click', menuClick, false);
    //c.removeEventListener('mousemove', menuMove, false);*/
  }
}

function menuMove(evt){   
    if(menuBool){
        var whichButton;
        mousePos = getMousePos(canvas, evt);
          if (mousePos.y<h/4){
              if(whichButton !==1){
                    ctx.clearRect(0, 0, w, h); //clears the screen of score and background image
                    ctx.drawImage(menu_background, 0, 0, w, h);
                    ctx.drawImage(start1, 0, 0, w, h/4);
                    ctx.drawImage(img_help, 0, h/4, w, h/4);
                    ctx.drawImage(img_highScore, 0, h/2, w, h/4);
                    ctx.drawImage(difficultyButton[difficulty], 0, 3*h/4, w,h/4);
                    whichButton=1;
              }
          }
          else if (mousePos.y<2*h/4){
             if(whichButton !==2){
                ctx.clearRect(0, 0, w, h); //clears the screen of score and background image
                ctx.drawImage(menu_background, 0, 0, w, h);
                ctx.drawImage(img_start, 0, 0, w, h/4);
                ctx.drawImage(help1, 0, h/4, w, h/4);
                ctx.drawImage(img_highScore, 0, h/2, w, h/4);
                ctx.drawImage(difficultyButton[difficulty], 0, 3*h/4, w,h/4);
                whichButton=2;
             }
          }
          else if (mousePos.y<3*h/4){
            if(whichButton !==3){
                ctx.clearRect(0, 0, w, h); //clears the screen of score and background image
                ctx.drawImage(menu_background, 0, 0, w, h);
                ctx.drawImage(img_start, 0, 0, w, h/4);
                ctx.drawImage(img_help, 0, h/4, w, h/4);
                ctx.drawImage(highScore1, 0, h/2, w, h/4);
                ctx.drawImage(difficultyButton[difficulty], 0, 3*h/4, w,h/4);
                whichButton=3;
            }
          }  
          else if(whichButton !==4){
            ctx.clearRect(0, 0, w, h); //clears the screen of score and background image
            ctx.drawImage(menu_background, 0, 0, w, h);
            ctx.drawImage(img_start, 0, 0, w, h/4);
            ctx.drawImage(img_help, 0, h/4, w, h/4);
            ctx.drawImage(img_highScore, 0, h/2, w, h/4);
			if(!isMobile){
				ctx.drawImage(difficultyButton[difficulty+3], 0, 3*h/4, w,h/4);
			}
			else{
				ctx.drawImage(difficultyButton[difficulty], 0, 3*h/4, w,h/4);
			}
            whichButton=4;
          }
    }
    
    else{
        removeEventListener('mousemove', menuMove, false);
    }       
}
function initLevel1(){
    level = 1;
    delay = 150 - 50*difficulty;
    inGame=true;
    numOfSquares = initialNumOfSquares;
    sizeOfSquare = Math.floor(w/numOfSquares);
    menu_background.src = "images/background.png";        
    img_heart.src = "images/heart.png";
    tempImage.src="images/Oz.png";
	menu_background_even.src = "images/OzColor.png";
	binary = 1;
}
function initNextLevel(){//theme: wizard of Oz
	switch(level) {
		case 1:
			nextLevelScoreReq=score+3000;
			foodBool=false;
			menu_background.src = "images/background3.png";   
			printPopup("Level 2!", "", 100); 
			break;
		case 2:
			menu_background_even.src = "images/junior.png";
			img_movingFood.src = "images/moon.png";
			printPopup("Level 3!", "", 100);
			nextLevelScoreReq=score+3000*level/2*difficulty;
			break;
		case 3:
			numOfSquares = numOfSquares*2; 
			sizeOfSquare = Math.floor(w/numOfSquares);
			menu_background.src = "images/background5.png";
			printPopup("Level 4!", "", 100);
			nextLevelScoreReq=score+3000*level/2*difficulty;
			foodBool=false;
		case 4:
			menu_background_even.src = "images/circus.png";
			numOfSquares = numOfSquares/2;
			sizeOfSquare = Math.floor(w/numOfSquares);
			SnakeArray[0].x=numOfSquares*sizeOfSquare/2;
			SnakeArray[0].y=numOfSquares*sizeOfSquare/2;
			for(i=1;i<=SnakeTail;i++){
				SnakeArray[i].x=SnakeArray[0].x;
				SnakeArray[i].y=SnakeArray[0].y;
			}
			makeFood();
			img_heart.src = "images/leaf.png";
			printPopup("Level 5!", "", 100);
			nextLevelScoreReq=score+3000*level/2*difficulty;
		case 5:
			menu_background.src = "images/pirateShip.png";
			img_movingFood.src = "images/lion.png";
			img_heart.src = "images/heart.png";
			printPopup("Lasso the Lion!", "Don't let the lion leave the dance floor!", 100);
			nextLevelScoreReq=score+3000*level/2*difficulty;
		case 6:
			level = 7;
			foodBool=false;
			menu_background_even.src = "images/bikiniBottom.png";
			img_heart.src = "images/booty.png";
			printPopup("Level 7!", "", 100);			
			bubbleBuddy.src = "images/bubbleBuddy.png";
			nextLevelScoreReq=score+3000*level/2*difficulty;
		case 7:
			foodBool = false;
			img_movingFood.src = "images/bubbles.png";
			//menu_background.src = "images/bikiniBottom.png";
			img_heart.src = "images/crabbyPatty.png";
			foodBool = false;
	}
	level++;     

}
function options(){
    ctx.clearRect(0, 0, w, h);
    ctx.drawImage(difficultyButton[difficulty],0,0,w,h/4);
    c.addEventListener("click", optionsClick, false);
}
function optionsClick(evt){
    mousePos=getMousePos(canvas,evt);
    if(mousePos.y<h/4){
        if(difficulty < 2)
            difficulty++;
        else
            difficulty = 0;
        options();
    }
    else{
        c.removeEventListener('click', optionsClick, false);
        c.removeEventListener('mousemove', menuMove, false);
        Menu();
    }
}
function debug(){
    SnakeInit();
    initLevel7();
    for(i=0; i<20; i++){
        addSnakeBit("body_plain");
    }
    //score = 10000000;
    scoreReq2=300;
    scoreReq3=300;
    scoreReq4=300;
    scoreReq5=300;
}
function helpClick(evt){
    mousePos = getMousePos(canvas, evt);
    c.removeEventListener("click", helpClick, false);
    //menu_background.src = "images/background.png";          
    if(mousePos.x>360 && mousePos.y <20){
        debug();
    }
	else{
		Menu();
	}

}
function help(){                        //what happens if you press help in menu
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx. drawImage(helpBackground, 0,0,w,h);
    c.addEventListener("click", helpClick, false);
}
function highScore(c){                  //what happens if you press highScore in menu
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.drawImage(highScoreBackground, 0,0,w,h);
    var scoresToRetrieve = 10;
    ctx.drawImage(head_up, 0,(1+1)*sizeOfSquare,sizeOfSquare-1,sizeOfSquare-1);
    ctx.drawImage(head_down, w-sizeOfSquare,(numOfSquares-h/4/sizeOfSquare-3)*sizeOfSquare,sizeOfSquare-1,sizeOfSquare-1);    
    for(i=2;i<numOfSquares-100/sizeOfSquare-1;i++){
        if(i%3===0){
            ctx.drawImage(body_up_red, 0,(i+1)*sizeOfSquare,sizeOfSquare-1,sizeOfSquare-1);          
        }
        else if(i%3===1){
            ctx.drawImage(body_up_blue, 0,(i+1)*sizeOfSquare,sizeOfSquare-1,sizeOfSquare-1);
        }
        else if(i%3===2){
            ctx.drawImage(body_up, 0,(i+1)*sizeOfSquare,sizeOfSquare-1,sizeOfSquare-1); 
        }
    }
    for(i=0;i<numOfSquares-100/sizeOfSquare-4;i++){
        if(i%3===0){
            ctx.drawImage(body_down_red, w-sizeOfSquare,(i+1)*sizeOfSquare,sizeOfSquare-1,sizeOfSquare-1);            
        }
        else if(i%3===1){
            ctx.drawImage(body_down_blue, w-sizeOfSquare,(i+1)*sizeOfSquare,sizeOfSquare-1,sizeOfSquare-1);
        }
        else if(i%3===2){
            ctx.drawImage(body_down, w-sizeOfSquare,(i+1)*sizeOfSquare,sizeOfSquare-1,sizeOfSquare-1);  
        }
    }
    for(i=0;i<numOfSquares;i++){
        if(i%3===0){
            ctx.drawImage(body_left, (i+1)*sizeOfSquare,3*h/4-sizeOfSquare,sizeOfSquare-1,sizeOfSquare-1);
            ctx.drawImage(body_right_blue, (i)*sizeOfSquare,0,sizeOfSquare-1,sizeOfSquare-1);           
        }
        else if(i%3===1){
            ctx.drawImage(body_left_red, (i+1)*sizeOfSquare,3*h/4-sizeOfSquare,sizeOfSquare-1,sizeOfSquare-1);
            ctx.drawImage(body_right, (i)*sizeOfSquare,0,sizeOfSquare-1,sizeOfSquare-1);
        }
        else if(i%3===2){
            ctx.drawImage(body_left_blue, (i+1)*sizeOfSquare,3*h/4-sizeOfSquare,sizeOfSquare-1,sizeOfSquare-1);
            ctx.drawImage(body_right_red, (i)*sizeOfSquare,0,sizeOfSquare-1,sizeOfSquare-1); 
        }
    }
    if(binary===1){
        $.post("getScores.php", {count: scoresToRetrieve}, function(result) {
            var obj = $.parseJSON(result);
            var names = [];
            var scores = [];
            for (var i = 0; i < obj.length; i++) { 
                names.push(obj[i]["Name"]);
                scores.push(obj[i]["Score"]);
            }
            /*
            ____Name___|____Score_____
              names[0] |   scores[0]
              names[0] |   scores[1]
                ...    |     ...
              names[4] |   scores[4]
            */
            
            ctx.fillStyle = '#FF33CC';
            ctx.font = 'bold 30px sans-serif';
            ctx.textBaseline = 'bottom';
            ctx.textAlign = 'center';
            ctx.fillText("ALL TIME",w/2, 85);
            var textNameScore = ""; 
            ctx.fillStyle = '#00FFFF';
            ctx.fillText("TOP 10 HIGH SCORES", 200, 58);
            ctx.fillStyle = '#FF850A';
            ctx.font = 'bold 20px sans-serif';
            ctx.textAlign = 'center';
            ctx.fillText("NAME", 200, 0*17+100);
            ctx.textAlign = 'right';
            //ctx.fillStyle = '#CC33FF';
            ctx.fillText("SCORE",360, 0*17+100);
            ctx.textAlign = 'left';
            ctx.fillText("PLACE",45, 0*17+100);
            ctx.font = 'bold 15px sans-serif';
            
            
            var place = new Array();
            place[0]="1st";
            place[1]="2nd";
            place[2]="3rd";
            for(i=3;i<10;i++){
                place[i]=(i+1)+"th";
            }
            
            for(i=0;i<scoresToRetrieve;i++){   
                if(i==0){
                    ctx.fillStyle = '#EBF5FF';
                }
                else if(i===1){
                    ctx.fillStyle = '#B8DBFF'; 
                }
                else if(i===2){
                    ctx.fillStyle = '#85C2FF';
                }
                /*else{
                    ctx.fillStyle = '#A3A3A3';
                }
                */
                else if(i===3){
                    ctx.fillStyle = '#0582FF';
                }
                else if(i===4){
                    ctx.fillStyle = '#0075EB';
                }
                else if(i===5){
                    ctx.fillStyle = '#0069D1';
                }
                else if(i===6){
                    ctx.fillStyle = '#005CB8';
                }
                else if(i===7){
                    ctx.fillStyle = '#004F9E';
                }
                else if(i===8){
                    ctx.fillStyle = '#004285';
                }
                else if(i===9){
                    ctx.fillStyle = '#00366B';
                }
                ctx.fillText(place[i], 45, (i+1)*17+100);
            }
            ctx.textAlign = 'center';
            for(i=0;i<scoresToRetrieve;i++){   
                if(i==0){
                    ctx.fillStyle = '#EBF5FF';
                }
                else if(i===1){
                    ctx.fillStyle = '#B8DBFF'; 
                }
                else if(i===2){
                    ctx.fillStyle = '#85C2FF';
                }
                else if(i===3){
                    ctx.fillStyle = '#0582FF';
                }
                else if(i===4){
                    ctx.fillStyle = '#0075EB';
                }
                else if(i===5){
                    ctx.fillStyle = '#0069D1';
                }
                else if(i===6){
                    ctx.fillStyle = '#005CB8';
                }
                else if(i===7){
                    ctx.fillStyle = '#004F9E';
                }
                else if(i===8){
                    ctx.fillStyle = '#004285';
                }
                else if(i===9){
                    ctx.fillStyle = '#00366B';
                }
                ctx.fillText(names[i], 200, (i+1)*17+100);
            }
            //ctx.drawImage(highScoreBackground, 230,100,w-290,5*h/11);
             for(i=0;i<scoresToRetrieve;i++){   
                if(i==0){
                    ctx.fillStyle = '#EBF5FF';
                }
                else if(i===1){
                    ctx.fillStyle = '#B8DBFF'; 
                }
                else if(i===2){
                    ctx.fillStyle = '#85C2FF';
                }
                else if(i===3){
                    ctx.fillStyle = '#0582FF';
                }
                else if(i===4){
                    ctx.fillStyle = '#0075EB';
                }
                else if(i===5){
                    ctx.fillStyle = '#0069D1';
                }
                else if(i===6){
                    ctx.fillStyle = '#005CB8';
                }
                else if(i===7){
                    ctx.fillStyle = '#004F9E';
                }
                else if(i===8){
                    ctx.fillStyle = '#004285';
                }
                else if(i===9){
                    ctx.fillStyle = '#00366B';
                }
                ctx.textAlign = 'right';
                ctx.fillText(scores[i],360, (i+1)*17+100)
            }    
        });
    }
    else{
        $.post("getScoresHour.php", {count: scoresToRetrieve}, function(result) {
            var obj = $.parseJSON(result);
            var names = [];
            var scores = [];
            for (var i = 0; i < obj.length; i++) { 
                names.push(obj[i]["Name"]);
                scores.push(obj[i]["Score"]);
            }
            /*
            ____Name___|____Score_____
              names[0] |   scores[0]
              names[0] |   scores[1]
                ...    |     ...
              names[4] |   scores[4]
            */
            
            
            ctx.fillStyle = '#FF33CC';
            ctx.font = 'bold 30px sans-serif';
            ctx.textBaseline = 'bottom';
            ctx.textAlign = 'center';
            ctx.fillText("LAST HOUR",w/2, 85);
            var textNameScore = ""; 
            ctx.fillStyle = '#00FFFF';
            ctx.fillText("TOP 10 HIGH SCORES", 200, 58);
            ctx.fillStyle = '#FF850A';
            ctx.font = 'bold 20px sans-serif';
            ctx.textAlign = 'center';
            ctx.fillText("NAME", 200, 0*17+100);
            ctx.textAlign = 'right';
            //ctx.fillStyle = '#CC33FF';
            ctx.fillText("SCORE",360, 0*17+100);
            ctx.textAlign = 'left';
            ctx.fillText("PLACE",45, 0*17+100);
            ctx.font = 'bold 15px sans-serif';
            
            
            var place = new Array();
            place[0]="1st";
            place[1]="2nd";
            place[2]="3rd";
            for(i=3;i<10;i++){
                place[i]=(i+1)+"th";
            }
            
            for(i=0;i<scoresToRetrieve;i++){   
                if(i==0){
                    ctx.fillStyle = '#EBF5FF';
                }
                else if(i===1){
                    ctx.fillStyle = '#B8DBFF'; 
                }
                else if(i===2){
                    ctx.fillStyle = '#85C2FF';
                }
                /*else{
                    ctx.fillStyle = '#A3A3A3';
                }
                */
                else if(i===3){
                    ctx.fillStyle = '#0582FF';
                }
                else if(i===4){
                    ctx.fillStyle = '#0075EB';
                }
                else if(i===5){
                    ctx.fillStyle = '#0069D1';
                }
                else if(i===6){
                    ctx.fillStyle = '#005CB8';
                }
                else if(i===7){
                    ctx.fillStyle = '#004F9E';
                }
                else if(i===8){
                    ctx.fillStyle = '#004285';
                }
                else if(i===9){
                    ctx.fillStyle = '#00366B';
                }
                if(names[i])
                    ctx.fillText(place[i], 45, (i+1)*17+100);
            }
            ctx.textAlign = 'center';
            for(i=0;i<scoresToRetrieve;i++){   
                if(i==0){
                    ctx.fillStyle = '#EBF5FF';
                }
                else if(i===1){
                    ctx.fillStyle = '#B8DBFF'; 
                }
                else if(i===2){
                    ctx.fillStyle = '#85C2FF';
                }
                else if(i===3){
                    ctx.fillStyle = '#0582FF';
                }
                else if(i===4){
                    ctx.fillStyle = '#0075EB';
                }
                else if(i===5){
                    ctx.fillStyle = '#0069D1';
                }
                else if(i===6){
                    ctx.fillStyle = '#005CB8';
                }
                else if(i===7){
                    ctx.fillStyle = '#004F9E';
                }
                else if(i===8){
                    ctx.fillStyle = '#004285';
                }
                else if(i===9){
                    ctx.fillStyle = '#00366B';
                }
                if(names[i])
                    ctx.fillText(names[i], 200, (i+1)*17+100);
            }
            //ctx.drawImage(highScoreBackground, 230,100,w-290,5*h/11);
             for(i=0;i<scoresToRetrieve;i++){   
                if(i==0){
                    ctx.fillStyle = '#EBF5FF';
                }
                else if(i===1){
                    ctx.fillStyle = '#B8DBFF'; 
                }
                else if(i===2){
                    ctx.fillStyle = '#85C2FF';
                }
                else if(i===3){
                    ctx.fillStyle = '#0582FF';
                }
                else if(i===4){
                    ctx.fillStyle = '#0075EB';
                }
                else if(i===5){
                    ctx.fillStyle = '#0069D1';
                }
                else if(i===6){
                    ctx.fillStyle = '#005CB8';
                }
                else if(i===7){
                    ctx.fillStyle = '#004F9E';
                }
                else if(i===8){
                    ctx.fillStyle = '#004285';
                }
                else if(i===9){
                    ctx.fillStyle = '#00366B';
                }
                ctx.textAlign = 'right';
                if(names[i])
                    ctx.fillText(scores[i],360, (i+1)*17+100)
            }    
        });
    
    }
    var backButton = document.getElementById('back_button');
    ctx.drawImage(backButton, 0, 6*h/8 , w, 2*h/8);
    c.addEventListener("click", highScoreClick, false); 
       
}
function highScoreClick(evt){ //called when someone clicks in the high score menu
    mousePos = getMousePos(canvas, evt);
    if (mousePos.y>6*h/8){
        c.removeEventListener("click", highScoreClick, false);
        menu_background.src = "images/background.png";        
        Menu();                    
    }
    else{
        if(binary===1)
            binary=0;
        else
            binary=1;
        highScore();
    }
}
function startButton(c){                //what happens if you press start in menu
  SnakeInit();  
}
function SnakeInit(){
    initLevel1();
	score = 0; 					//reset score to 0	
    scoreMod = 1;               //reset modifier to 1
	SnakeTail=-1;				//Most recently added SnakeBit
	dn="right";  				//direction
    d="right";
	nx=4*sizeOfSquare;						//resets where the next added snakebits go (top left)
	ny=0;
    addSnakeBit("head");
    nx=nx-sizeOfSquare;
	for(i=4;i>=0;i--){
		addSnakeBit("body_plain");
		nx=nx-sizeOfSquare;
	}
    GameOver=false;    
	makeFood();
	paint();
}
var tempImage = new Image();
function makeTwister(){
	
    level = 1.5;
    img_movingFood.src = "images/twister.png"; 
	menu_background.src="images/backgroundBlack.png";
	makeMovingFood();
    twisterFlicker();
}
function twisterFlicker(){
if(!GameOver){
    if(binary===1){
		binary = 0;
        //menu_background = tempImage;
        //tempImage.src="images/backgroundBlack.png";
        //num = 0;
    }
    else if(binary===0){
        //menu_background = tempImage;
        //tempImage.src="images/Oz.png";
        binary = 1;
    }
    if(level===1.5){
        setTimeout(function(){twisterFlicker();},delay*3);
    }
}
}
function updateScore(){
    if(score>nextLevelScoreReq && level === 1){
        makeTwister();
    }
    else if(score>nextLevelScoreReq){
       initNextLevel();
    }
    
    if(level===8){
        if(score>scoreReq8 && delay>30){
            scoreReq8=score+20000;
            if(delay>100)
                delay=delay-10;
            if(delay>50)
                delay = delay - 5;
            else
                delay = delay - 1;
            scoreReq8
        }
    }
    score = score + 1; 								//update score as each second passes         
    //setTimeout(updateScore,100); 	//call again to update score
}
function printScore() {
  //ctx.translate(0.5, 0.5);
  ctx.font         = "bold 14px Arial";
  ctx.textBaseline = "top"; 
  //ctx.font = 'bold 12px sans-serif';
  ctx.textBaseline = 'bottom';
  ctx.textAlign = 'left';
  ctx.textAlign = 'bottom';
  var x =4;
  var y =h-2;
  ctx.fillStyle    = "black";
  ctx.fillText( 'score: ' + Math.floor(score), x-1, y );    
  ctx.fillText( 'score: ' + Math.floor(score), x, y-1 );    
  ctx.fillText( 'score: ' + Math.floor(score), x+1, y );    
  ctx.fillText( 'score: ' + Math.floor(score), x, y+1 );    

  ctx.fillStyle    = "white";
  ctx.fillText( 'score: ' + Math.floor(score), x, y ); 
  //ctx.fillStyle = '#808080'; //gray
  /*ctx.font = 'bold 12px sans-serif';
  ctx.textBaseline = 'bottom';
  ctx.textAlign = 'left';
  ctx.textAlign = 'bottom';*/
  //ctx.fillText('score: ' + Math.floor(score), 4, h-2); 			//display in lower left hand corner
                                                                //Math.floor keeps score an integer
}
function printMod(){
  ctx.fillStyle = '#808080'; //gray
  ctx.font = 'bold 12px sans-serif';
  ctx.textBaseline = 'bottom';
  ctx.textAlign = 'left';
  ctx.textAlign = 'bottom';
  ctx.fillText('modifier: ' + Math.round(scoreMod*10)/10, w-80, 16); 
}
function addSnakeBit(image){	         								//adds a new snake bit 
	SnakeArray[++SnakeTail]={};						//x and y variables are for location
	SnakeArray[SnakeTail].x=nx;									
	SnakeArray[SnakeTail].y=ny;
    SnakeArray[SnakeTail].image=image;
	if(SnakeTail !==0){											//dir variable is to know which image to load
		SnakeArray[SnakeTail].dir = SnakeArray[SnakeTail-1].dir;
	}
	else{ // is snake head
		SnakeArray[SnakeTail].dir = d;
	}
    scoreMod += 0.1;
}
function getRandomArbitrary (min, max) { //returns random integer between min and max. min is more likely than max due to floor function
    return Math.floor(Math.random() * (max - min) + min);
}
function makeMovingFood(){
	foodBool = true; 
	movingFood.x= getRandomArbitrary(w/4/sizeOfSquare,3*w/4/sizeOfSquare)*sizeOfSquare;
	movingFood.y= getRandomArbitrary(h/4/sizeOfSquare,3*h/4/sizeOfSquare)*sizeOfSquare;
	for(i=0; i<=SnakeTail; i++){
		if(movingFood.x === SnakeArray[i].x && movingFood.y === SnakeArray[i].y){		//this could be risky at very high snake bit counts
			makeMovingFood();
			break;
		}
	}
}
function makeFood(){
	food.x= getRandomArbitrary(0,numOfSquares-1)*sizeOfSquare;
	food.y= getRandomArbitrary(0,numOfSquares-1)*sizeOfSquare;
	for(i=0; i<=SnakeTail; i++){
		if(food.x === SnakeArray[i].x && food.y === SnakeArray[i].y){		//this could be risky at very high snake bit counts
			makeFood();
			break;
		}
	}
}
function printFood(){
	if(foodBool){
		ctx.drawImage(img_movingFood, movingFood.x, movingFood.y, 2*sizeOfSquare-1, 2*sizeOfSquare-1);
	}
	ctx.drawImage(img_heart, food.x, food.y, sizeOfSquare-1,  sizeOfSquare-1);
}
function printPopup(text, text2, p){
  popupTime = p;
  popupText =text;
  popupText2=text2;
  var cx = w/2;
  var cy = h/2;
  ctx.fillStyle = '#4A4FFF';
  ctx.font = 'bold 20px sans-serif';
  ctx.textBaseline = 'bottom';
  ctx.textAlign = 'center';
  //ctx.fillText(text, cx, cy); 			//add a personalized random message later
  
  //ctx.fillText(text2, cx, cy+20);
  
  var x =cx;
  var y =cy;
  ctx.fillStyle    = "blue";
  ctx.fillText( text,  x-1, y );    
  ctx.fillText( text,  x, y-1 );    
  ctx.fillText( text,  x+1, y );    
  ctx.fillText( text,  x, y+1 );   

  ctx.fillText( text2,  x-1, y +20);    
  ctx.fillText( text2,  x, y-1 +20);    
  ctx.fillText( text2, x+1, y +20);    
  ctx.fillText( text2, x, y+1 +20);

  ctx.fillStyle    = "orange";
  ctx.fillText( text, x, y );
  ctx.fillText( text2, x, y+20 );   
}
function paint(){        				//clears screen and repaints snake in new position	
	ctx.clearRect(0, 0, w, h);
	if(level===1.5){
		if(binary===1)
			ctx.drawImage(menu_background, 0, 0, w, h);
		else
			ctx.drawImage(tempImage, 0, 0, w, h);
	}
	else if(level%2===1 || GameOver || menuBool)
		ctx.drawImage(menu_background, 0, 0, w, h);
	else
		ctx.drawImage(menu_background_even, 0, 0, w, h);
    if(popupTime > 0){
        printPopup(popupText, popupText2, popupTime);
        popupTime--;
    }
	printFood();
	printSnake();
	printScore();
    //printMod();
}
function foodCheck(){						//checks to see if snake hits food
	if(food.x === SnakeArray[0].x && food.y === SnakeArray[0].y){		//checks for food
		score=score+200*scoreMod*(1+difficulty*difficulty);        
        if(level !== 3 && level!==8){
            addSnakeBit("body_plain");
        }
        else if(level === 3){
            addSnakeBit("minion");
        }
        else if(level === 8){
            addSnakeBit("jellyfish");
        }
		makeFood();
	}
	else if(foodBool){		
		checkMovingFoodCollision();	//checks moving food for eating
	}
	else{
        if(level===1.5 || level ===3 || level === 6 || level ===8){
            if(getRandomArbitrary(0,40) > 37){
                makeMovingFood();
            }
        }
	}	
}
function checkCollision(){
	var isHit=false;		//is true if the snake is going to hit itself
	if(d === "right"){
		for( i = 1; i <= SnakeTail; i++ ){
			if(SnakeArray[0].x+sizeOfSquare===SnakeArray[i].x && SnakeArray[0].y === SnakeArray[i].y){
				isHit = true;                		
			}			
		}
	}
	else if(d === "up"){
		for(i=1; i<=SnakeTail; i++){
			if(SnakeArray[0].x===SnakeArray[i].x && SnakeArray[0].y-sizeOfSquare === SnakeArray[i].y){
				isHit = true;
			}			
		}			
	}
	else if(d==="left"){	
		for(i=1; i<=SnakeTail; i++){
			if(SnakeArray[0].x-sizeOfSquare===SnakeArray[i].x && SnakeArray[0].y === SnakeArray[i].y){
				isHit = true;
			}			
		}					
	}		
	else if(d==="down"){	
		for(i=1; i<=SnakeTail; i++){
			if(SnakeArray[0].x===SnakeArray[i].x && SnakeArray[0].y+sizeOfSquare === SnakeArray[i].y){
				isHit = true;
			}			
		}				
	}
    if(isHit){
        ctx.clearRect(0, 0, w, h);
		menu_background.src = "images/background.png";
		ctx.drawImage(deathscreen, 0, 0, w, h);
		printPopup('Your conga line crashed!','Score: '+Math.floor(score), 0);
        sendToDB(Math.floor(score));
		deleteSnake();	    
    }
	else{
		if(SnakeArray[0].x<0||SnakeArray[0].x>=w||SnakeArray[0].y<0||SnakeArray[0].y>=h){ //checks whether the snake leaves the screen
            ctx.clearRect(0, 0, w, h);
			menu_background.src = "images/background.png";
			ctx.drawImage(deathscreen, 0, 0, w, h);
			printPopup('Your conga line left the dance floor!','Score: '+Math.floor(score),0);
            sendToDB(Math.floor(score));
			deleteSnake();			
		}
        
		else{
            if(level === 7){
                if(SnakeArray[0].x > (numOfSquares-3)*sizeOfSquare){
                    printPopup("Overboard!", "", 50);
                    initLevel8();
                }
            }
            moveSnakeHead();
			foodCheck();
            updateScore();
            paint();
		}
	}
}
function sendToDB(score) {
    var name = prompt("Give me your name: ");
    while (name && (name.length > 15 || name.length <3)) {
        if(name.length>15)
            alert("Name must be shorter than 15 characters!");
        else if(name.length<3)
            alert("Name must be at least 3 characters!");
        name = prompt("Give me your name: ");
    }
    if (name) {
        $.post("sendScore.php", {name: name, score: score}, function(result) {
            console.log("Result from sending score: "+result);
        });
    }
}
function moveSnakeHead(){
    if(d==="right"){
        SnakeArray[0].x += sizeOfSquare;
    }
    else if(d==="left"){
        SnakeArray[0].x -= sizeOfSquare;
    }
    else if(d==="up"){
        SnakeArray[0].y -= sizeOfSquare;
    }
    else if(d==="down"){
        SnakeArray[0].y += sizeOfSquare;
    }
    
}
function moveSnake(){
	nx= SnakeArray[SnakeTail].x;
	ny= SnakeArray[SnakeTail].y;
	SnakeArray[0].dir= d;
	for(i=SnakeTail; i>0; i--){
		SnakeArray[i].x=SnakeArray[i-1].x;
		SnakeArray[i].y=SnakeArray[i-1].y;
		SnakeArray[i].dir=SnakeArray[i-1].dir;
	}	
	d=dn;		
	setTimeout(checkCollision,0);
}
function randomizeFoodDirection(){ //randomizes the direction of the food in a (preferably) not annoying way
	rand = getRandomArbitrary(0,100);
	if(rand>=90){
		if(rand >= 97.5){
			foodD="right";
		}
		else if(rand>=95){
			foodD="left";
		}
		else if(rand>=92.5){
			foodD="up";
		}
		else if(rand>=90){
			foodD="down";
		}
	}
}
var binary = 1;      //for moving food every other frame, also for flickering twister scene
function moveFood(){ //changes the direction of the food if it's going the wrong way (i.e. off the screen)	    
    if(level>2){
		if(binary===1){
			binary = 0;
		}
		else{
			binary = 1;
		}
	}
    if( foodD === "right"){		
		if(movingFood.x > w-sizeOfSquare*4){
            if(level !== 6){
                foodD= "left";
            }
            else if(movingFood.x > w-sizeOfSquare*2){
                printPopup("The lion escaped!", "Score - 1000", 2000);
                score = score - 1000;
                foodBool = false;
            }
		}        
        if(level!=6){
            movingFood.x += sizeOfSquare;
        }
        else if(binary==1){
            movingFood.x += sizeOfSquare;
        }
	}
	else if( foodD === "left"){    
		if(movingFood.x < sizeOfSquare*2){
            if(level !== 6){
                foodD= "right";
            }
            else if(movingFood.x < sizeOfSquare){
                printPopup("The lion escaped!", "Score - 1000", 2000);
                score = score - 1000;
                foodBool = false;
            }
		}
		if(level!=6){
            movingFood.x -= sizeOfSquare;
        }
        else if(binary==1){
            movingFood.x -= sizeOfSquare;
        }
	}
	else if( foodD === "up"){		
		if(movingFood.y < sizeOfSquare*2){
            if(level !== 6){
                foodD= "down";
            }
            else if(movingFood.y < sizeOfSquare){
                printPopup("The lion escaped!", "Score - 1000", 2000);
                score = score - 1000;
                foodBool = false;
            }
		}        
        if(level!=6){
            movingFood.y -= sizeOfSquare;
        }
        else if(binary==1){
            movingFood.y -= sizeOfSquare
        }
	}
	else if( foodD === "down"){
		if(movingFood.y > h-sizeOfSquare*4){
            if(level !== 6){
                foodD= "up";
            }
            else if(movingFood.y > h-sizeOfSquare*2){
                printPopup("The lion escaped!", "Score - 1000", 2000);
                score = score - 1000;
                foodBool = false;
            }
		}
        if(level!=6){
            movingFood.y += sizeOfSquare;
        }
        else if(binary==1){
            movingFood.y += sizeOfSquare;
        }
	}
}
function changeFoodDirection(){
    if(foodD==="right"){
        foodD="left";
    }
    else if(foodD==="down"){
        foodD="up";
    }
    else if(foodD==="left"){
        foodD="right";
    }
    else if(foodD==="up"){
        foodD="down";
    }
}
function checkMovingFoodCollision(){
	if(((movingFood.x === SnakeArray[0].x && movingFood.y === SnakeArray[0].y) ||(movingFood.x === SnakeArray[0].x && movingFood.y === SnakeArray[0].y-sizeOfSquare)||(movingFood.x === SnakeArray[0].x-sizeOfSquare && movingFood.y === SnakeArray[0].y)||(movingFood.x === SnakeArray[0].x -sizeOfSquare && movingFood.y === SnakeArray[0].y-sizeOfSquare))&& level != 6){
		score += 400*scoreMod*(1+difficulty*difficulty);
        if(level===1.5){
			level=1;
            initNextLevel();           
        }
        else if(level===8){
            addSnakeBit("bubbleBuddy");
        }
        //scoreMod += (1 - scoreMod/10);// makes it impossible for scoreMod to go over 10. realistically won't approach 10
		foodBool=false;
	}
	else{
        randomizeFoodDirection();
        moveFood();
        if((movingFood.x === food.x && movingFood.y === food.y) ||(movingFood.x === food.x && movingFood.y === food.y-sizeOfSquare)||(movingFood.x === food.x-sizeOfSquare && movingFood.y === food.y)||(movingFood.x === food.x -sizeOfSquare && movingFood.y === food.y-sizeOfSquare)){
            changeFoodDirection(); 
            moveFood();
        }
        for(i=0;i<SnakeTail;i++){       //checks that movingFood isn't hitting the snake body, changes direction and breaks if it is
            if((movingFood.x === SnakeArray[i].x && movingFood.y === SnakeArray[i].y) ||(movingFood.x === SnakeArray[i].x && movingFood.y === SnakeArray[i].y-sizeOfSquare)||(movingFood.x === SnakeArray[i].x-sizeOfSquare && movingFood.y === SnakeArray[i].y)||(movingFood.x === SnakeArray[i].x -sizeOfSquare && movingFood.y === SnakeArray[i].y-sizeOfSquare)){
                changeFoodDirection();
                moveFood();
                break;
            }
        }		
	}
}
function deleteSnake(){
    foodBool=false;
    inGame = false;
	for(i=0; i<SnakeTail;i++){
		delete SnakeArray[i];
	}
    /*if(isMobile){
        c.removeEventListener('touchstart',mobile, false);
    }*/
    if(isMobile){
        setTimeout(function(){
            c.addEventListener("click", goToMenu, false);
        },delay)  
    }
    else{
        menu_background.src = "images/background.png";
        c.addEventListener("click", goToMenu, false);        
    }
    GameOver = true;
}
function goToMenu(){
    c.removeEventListener('click', goToMenu, false);
    Menu();
}
function printSnake(){		
	
}
  
  //printPopup(mobileClickX,mobileClickY, 10);  
  /*if(mobileClickX > mobileClickY ){
    if(mobileClickY <= h-mobileClickX){
        if(d!="down"){
            dn = "up";
        }
    }
    else{
        if(d!="left"){
            dn = "right";
        }
    }
  }
  else{
    if(mobileClickY <= h-mobileClickX){
        if(d != "right"){
            dn = "left";
        }
    }
    else{
        if(d != "up"){
            dn = "down";
        }
    }
  }
  if(GameOver  && inGame){ //On mobile, another click after death will bring user to menu
        goToMenu();
  }
}*/
