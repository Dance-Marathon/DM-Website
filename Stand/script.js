/// <reference path="GameLoop.ts" />
var Game;
(function (Game) {
    var MenuController = (function () {
        function MenuController(gameloop, canvas, width, height, model, menuView) {
            this.gameloop = gameloop;
            this.canvas = canvas;
            this.model = model;
            this.height = height;
            this.width = width;
            this.menuView = menuView;
            this.notEnoughCat = false;
        }
        MenuController.prototype.takeInput = function () {
            this.mobileClick = this.mobileClick.bind(this);
            this.canvas.addEventListener('click', this.mobileClick);
        };
        MenuController.prototype.mobileClick = function (e) {
            var mobileClickY = event.y;
            mobileClickY -= this.canvas.offsetTop;
            var mobileClickX = event.x;
            mobileClickX -= this.canvas.offsetLeft;
            if (this.notEnoughCat) {
                this.catClick(mobileClickX, mobileClickY);
            } else {
                this.click(mobileClickX, mobileClickY);
            }
        };

        MenuController.prototype.catClick = function (X, Y) {
            clearTimeout(this.menuView.animationOne);
            this.notEnoughCat = false;
            this.menuView.render(this.gameloop.currentGame);
        };
        MenuController.prototype.click = function (X, Y) {
            if (X < 183 * this.width / 375 && X > 7 * this.width / 375) {
                if (Y < 342 * this.height / 667 && Y > 291 * this.height / 667) {
                    this.switchToGameState();
                } else if (Y < 410 * this.height / 667 && Y > 352 * this.height / 667) {
                    this.switchToCategoriesState();
                } else if (Y < 475 * this.height / 667 && Y > 425 * this.height / 667) {
                    this.gameloop.switchGameModes();
                } else if (Y < 540 * this.height / 667 && Y > 483 * this.height / 667) {
                    this.switchToHelpState();
                }
            }
        };

        MenuController.prototype.switchStates = function () {
            clearTimeout(this.menuView.balloonAnimation);
            this.canvas.removeEventListener('click', this.mobileClick);
            console.log("switching states");
        };

        MenuController.prototype.switchToGameState = function () {
            if (this.model.gameCanStart()) {
                this.switchStates();
                this.gameloop.switchToGameState();
            } else {
                this.notEnoughCat = true;
                this.menuView.renderNotEnoughCategories(-10, 1, 0);
            }
        };
        MenuController.prototype.switchToCategoriesState = function () {
            this.switchStates();
            this.gameloop.switchToCategoriesState();
        };
        MenuController.prototype.switchToHelpState = function () {
            this.switchStates();
            this.gameloop.switchToHelpState();
        };
        return MenuController;
    })();
    Game.MenuController = MenuController;
})(Game || (Game = {}));
var Game;
(function (Game) {
    var Resources = (function () {
        function Resources() {
            this.menu_background1 = new Image();
            this.menu_background2 = new Image();
            this.buttons = new Image();
            this.buttons2 = new Image();
            this.game_background = new Image();
            this.game_background2 = new Image();
            this.forehead = new Image();
            this.pass = new Image();
            this.roundPicking = new Image();
            this.correct = new Image();
            this.endGame_background = new Image();
            this.rightArrow = new Image();
            this.leftArrow = new Image();
            this.rightArrowPressed = new Image();
            this.leftArrowPressed = new Image();
            this.category_background = new Image();
            this.category_background1 = new Image();
            this.noCatSel = new Image();
            this.balloon = new Image();
            this.kids = new Image();
            this.orangeBackground = new Image();
            this.stand = new Image();
            this.slime = new Image();
            this.blueBackground = new Image();
            this.nextRoundButton = new Image();
            this.helpScreen1 = new Image();
            this.helpScreen2 = new Image();
            this.menu_background1.src = "thenewMenu.png";
            this.menu_background2.src = "thenewMenu2.png";
            this.game_background.src = "InGame.png";
            this.game_background2.src = "InGame2.png";
            this.roundPicking.src = "RoundPickingBackground.png";
            this.forehead.src = "forehead.png";
            this.pass.src = "pass.png";
            this.correct.src = "correct.png";
            this.endGame_background.src = "endGame.png";
            this.rightArrow.src = "rightArrow.png";
            this.leftArrow.src = "leftArrow.png";
            this.rightArrowPressed.src = "rightArrowClicked.png";
            this.leftArrowPressed.src = "leftArrowClicked.png";
            this.category_background.src = "money.png";
            this.category_background1.src = "categories_foreground_menuselected.png";
            this.noCatSel.src = "noCategorySelected.png";
            this.balloon.src = "balloon.png";
            this.kids.src = "kids.png";
            this.orangeBackground.src = "orangeBack.png";
            this.stand.src = "stand.png";
            this.slime.src = "slime.png";
            this.blueBackground.src = "blueBackground.png";
            this.buttons.src = "buttons.png";
            this.buttons2.src = "buttons2.png";
            this.nextRoundButton.src = "NextRound.png";

            this.helpScreen1.src = "HelpScreen1.png";
            this.helpScreen2.src = "HelpScreen2.png";
        }
        Resources.prototype.hasLoaded = function () {
            return (this.menu_background1.complete && this.menu_background2.complete && this.game_background.complete && this.game_background2.complete && this.roundPicking.complete && this.forehead.complete && this.pass.complete && this.correct.complete && this.endGame_background.complete && this.rightArrow.complete && this.rightArrowPressed.complete && this.leftArrowPressed.complete && this.category_background.complete && this.category_background1.complete && this.noCatSel.complete && this.balloon.complete && this.orangeBackground.complete && this.stand.complete && this.blueBackground.complete && this.slime.complete && this.kids.complete && this.buttons.complete && this.buttons2.complete && this.nextRoundButton.complete && this.helpScreen1.complete && this.helpScreen2.complete);
        };
        return Resources;
    })();
    Game.Resources = Resources;
})(Game || (Game = {}));
/// <reference path="Resources.ts" />
var Game;
(function (Game) {
    var MenuView = (function () {
        function MenuView(resources, context, width, height, gameMode) {
            this.resources = resources;
            this.buttons = this.resources.buttons;
            this.buttons2 = this.resources.buttons2;
            this.orangeBackground = this.resources.orangeBackground;
            this.balloon = this.resources.balloon;
            this.stand = this.resources.stand;
            this.blueBackground = this.resources.blueBackground;
            this.slime = this.resources.slime;
            this.menu_background1 = this.resources.menu_background1;
            this.kids = this.resources.kids;
            this.menu_background2 = this.resources.menu_background2;
            this.arrow = this.resources.leftArrowPressed;
            this.noCatSel = this.resources.noCatSel;
            this.context = context;
            this.width = width;
            var self = this;
            this.height = height;
            this.gameMode = gameMode;
            this.menuOptions = ["Play Game", "Categories", "Mode", "Help"];
            this.animationTwo = false;
            this.animationThree = false;
            this.youCanClick = false;
            this.balloonHeight = this.height * 200 / 667;
            this.balloonDirection = false;
        }
        MenuView.prototype.renderNotEnoughCategories = function (height, velocity, friction) {
            clearTimeout(this.balloonAnimation);
            if (friction == 3) {
                this.youCanClick = true;
            } else {
                var gravity = 0.2;
                var bounceFactor = 0.5;
                this.clearCanvas();
                this.drawBackGround();
                this.context.drawImage(this.balloon, this.width - this.width * 230 / 375, this.balloonHeight, this.width * 280 / 375, this.height * 320 / 667);
                this.drawButtons();
                this.context.drawImage(this.noCatSel, this.width / 5, height, this.width / 1.5, this.height / 3);
                height += velocity;
                velocity += gravity;
                if (height + this.height / 6 > this.height / 2) {
                    height = this.height / 2 - this.height / 6;
                    velocity *= -bounceFactor;
                    ++friction;
                }
                var self = this;
                var f = function () {
                    self.renderNotEnoughCategories(height, velocity, friction);
                };
                this.animationOne = setTimeout(f, 1000 / 60);
            }
        };
        MenuView.prototype.clearCanvas = function () {
            this.context.clearRect(0, 0, this.width, this.height);
        };
        MenuView.prototype.drawBackGround = function () {
            this.context.drawImage(this.menu_background1, 0, 0, this.width, this.height);
        };
        MenuView.prototype.drawButtons = function () {
            if (this.gameMode == 1) {
                this.context.drawImage(this.buttons, 0, this.height / 2.5, this.width / 2, this.height / 2.4);
            } else {
                this.context.drawImage(this.buttons2, 0, this.height / 2.5, this.width / 2, this.height / 2.4);
            }
        };

        MenuView.prototype.render = function (gameMode) {
            if (this.balloonAnimation) {
                clearTimeout(this.balloonAnimation);
            }

            this.context.drawImage(this.menu_background1, 0, 0, this.width, this.height);

            var targetHeightTop = this.height * 180 / 667;
            var targetHeightBottom = this.height * 250 / 667;
            this.balloonAnimation1(this.balloonHeight, targetHeightTop, targetHeightBottom, this.balloonDirection);
        };
        MenuView.prototype.balloonAnimation1 = function (height, top, bottom, direction) {
            if (height >= bottom) {
                direction = true;
            } else if (height <= top) {
                direction = false;
            }
            if (direction) {
                this.clearCanvas();
                this.drawBackGround();
                this.context.drawImage(this.balloon, this.width - this.width * 230 / 375, height, this.width * 280 / 375, this.height * 320 / 667);
                this.drawButtons();
                height -= .1;
                this.balloonHeight = height;
                this.balloonDirection = direction;
                var self = this;
                var f = function () {
                    self.balloonAnimation1(height, top, bottom, direction);
                };
                this.balloonAnimation = setTimeout(f, 1000 / 600);
            } else {
                this.clearCanvas();
                this.drawBackGround();
                this.context.drawImage(this.balloon, this.width - this.width * 230 / 375, height, this.width * 280 / 375, this.height * 320 / 667);
                this.drawButtons();
                height += .1;
                this.balloonHeight = height;
                this.balloonDirection = direction;
                var self = this;
                var f = function () {
                    self.balloonAnimation1(height, top, bottom, direction);
                };
                this.balloonAnimation = setTimeout(f, 1000 / 600);
            }
        };
        return MenuView;
    })();
    Game.MenuView = MenuView;
})(Game || (Game = {}));
/// <reference path="GameLoop.ts" />
var Game;
(function (Game) {
    var HelpController = (function () {
        function HelpController(gameloop, canvas, width, height, model, helpView, gameMode) {
            this.gameloop = gameloop;
            this.canvas = canvas;
            this.model = model;
            this.height = height;
            this.width = width;
            this.helpView = helpView;
            this.gameMode = gameMode;
        }
        HelpController.prototype.takeInput = function () {
            this.mobileClick = this.mobileClick.bind(this);
            this.canvas.addEventListener('touchstart', this.mobileClick);
        };
        HelpController.prototype.mobileClick = function (e) {
            var mobileClickX = e.targetTouches[0].pageX;
            var mobileClickY = e.targetTouches[0].pageY;

            /*
            var mobileClickY = event.y;
            mobileClickY -= this.canvas.offsetTop;
            var mobileClickX = event.x;
            mobileClickX -= this.canvas.offsetLeft;
            */
            if (mobileClickY > this.height * 250 / 640 && mobileClickY < this.height * 340 / 640 && mobileClickX < this.width * 125 / 360) {
                if (this.gameMode == 1) {
                    this.helpView.render(2);
                    this.gameMode = 2;
                } else {
                    this.helpView.render(1);
                    this.gameMode = 1;
                }
            } else if (mobileClickY < this.height * 100 / 640 && mobileClickX < this.width * 100 / 360) {
                this.switchToMenuState();
            }
        };

        /*
        catClick(X,Y){
        clearTimeout(this.menuView.animationOne);
        this.notEnoughCat = false;
        this.menuView.render(this.gameloop.currentGame);
        }
        */
        HelpController.prototype.switchStates = function () {
            this.canvas.removeEventListener('touchstart', this.mobileClick);
            console.log("switching states");
        };

        HelpController.prototype.switchToMenuState = function () {
            this.switchStates();
            this.gameloop.switchToMenuState();
        };
        return HelpController;
    })();
    Game.HelpController = HelpController;
})(Game || (Game = {}));
/// <reference path="Resources.ts" />
var Game;
(function (Game) {
    var HelpView = (function () {
        function HelpView(resources, context, width, height, gameMode) {
            this.resources = resources;
            this.helpScreen1 = resources.helpScreen1;
            this.helpScreen2 = resources.helpScreen2;
            this.context = context;
            this.width = width;
            this.height = height;
            /*this.buttons = this.resources.buttons;
            this.buttons2 = this.resources.buttons2;
            this.orangeBackground = this.resources.orangeBackground;
            this.balloon = this.resources.balloon;
            this.stand = this.resources.stand;
            this.blueBackground = this.resources.blueBackground;
            this.slime = this.resources.slime;
            this.menu_background1 = this.resources.menu_background1;
            this.kids = this.resources.kids;
            this.menu_background2 = this.resources.menu_background2;
            this.arrow = this.resources.leftArrowPressed;
            this.noCatSel = this.resources.noCatSel;
            this.context = context;
            this.width = width;
            var self = this;
            this.height = height;
            this.gameMode = gameMode;
            this.menuOptions = ["Play Game", "Categories", "Mode", "Help"];
            this.animationTwo = false;
            this.animationThree = false;
            this.youCanClick = false;
            this.balloonHeight = this.height*200/667;
            this.balloonDirection = false;
            */
        }
        HelpView.prototype.clearCanvas = function () {
            this.context.clearRect(0, 0, this.width, this.height);
        };

        HelpView.prototype.drawHelpScreen = function (gameMode) {
            if (gameMode == 1) {
                this.context.drawImage(this.helpScreen1, 0, 0, this.width, this.height);
            } else {
                this.context.drawImage(this.helpScreen2, 0, 0, this.width, this.height);
            }
        };

        HelpView.prototype.render = function (gameMode) {
            this.drawHelpScreen(gameMode);
        };
        return HelpView;
    })();
    Game.HelpView = HelpView;
})(Game || (Game = {}));
var Game;
(function (Game) {
    var Model = (function () {
        function Model() {
            this.chosenCategories = [];
            this.playedWords = [];
            this.recentlyUsedWords = [];
            this.correctPlayedWords = [];
            this.generateItems();
            this.gameOver = false;
        }
        Model.prototype.clearVariables = function () {
            this.changeWord();
            this.gameOver = false;
            this.newItem = false;
            this.gameStarted = false;
            while (this.playedWords.length > 0) {
                this.playedWords.pop();
                this.correctPlayedWords.pop();
            }
        };
        Model.prototype.generateItems = function () {
            //VERY IMPORTANT: FIRST ELEMENT IN EACH CATEGORY IS THE NAME OF THE CATEGORY, DO NOT PRINT IT
            this.Categories = [
                [
                    "College Teams", "Florida Gators", "LSU Tigers", "Tenessee Volunteers", "Georgia Bulldogs", "Oregon Ducks", "Florida State Seminoles", "Arkansas Razorbacks",
                    "Alabama Crimson Tide", "South Carolina Gamecocks", "Ole Miss Rebels", "Kentucky Wildcats", "Texas A&M Aggies", "Michigan Wolverines", "Michigan State Spartans",
                    "Texas Longhorns", "Ohio State Buckeyes", "Notre Dame FIghting Irish", "Duke Blue Devils", "Nebraska Cornhuskers", "TCU Horned Frogs"],
                ["Dances", "Macarena", "Teach me how to dougie", "Cat Daddy", "Cha Cha Slide", "Cupid Shuffle", "Thriller", "Gangnam Style"],
                ["ESPN", "Erin Andrews", "Tim Tebow", "Soccer", "Football", "Baseball", "Softball", "Tennis", "Champion", "Hockey", "Basketball", "College Gameday", "The Gators", "Referee", "Yellow Card", "Red Card", "Goalie", "First Down", "Kicker", "Defense", "Offense", "Punt", "Quarterback", "Michael Jordan", "Sideline", "Cheerleaders", "Halftime Show", "Cleats", "Superbowl", "National Championship", "3 Strikes You’re Out", "Foul Ball", "Heisman", "Overtime", "Sweat", "Tackle", "Wide Receiver", "Striker", "Scoreboard", "Head Coach", "Conditioning", "Two-a-Days", "Gatorade", "Practice Makes Perfect", "Jersey", "Puck", "Kick Off", "Rain Delay", "Fans", "Underdog", "Comeback", "Undefeated Season", "Marching Band", "Umpire", "Nike", "3-pointer", "Dribble", "Homerun", "Pitcher", "Stadium", "Under Armor", "Dazzlers", "Time Out", "Fantasy Football", "Just Do It", "Get Your Head in the Game", "Rivalry", "Sponsor", "Tie", "Semi-Finals"],
                ["Medieval", "Chivalry", "Jousting", "Dark Ages", "Sword in the Stone", "Duke", "Knight", "Renaissance", "Melee", "Gauntlet", "Chalice", "Alms", "Prince", "Queen", "King", "Princess", "Jester", "Feast", "Cannon", "Chainmail", "Goblet", "Armor", "Axe", "Bow", "Arrow", "Duel", "Castle", "Helmet"],
                ["NickeloDM", "Dancing Lobsters", "Orange Soda", "Penelope", "Totally Kyle", "Crazy Courtney", "The Girls Room", "All That", "Tommy Pickles", "Cynthia & Angelica", "Phil & Lil", "Chuckie", "Football Head", "Helga Patnki", "Orange Blimp", "Slime Time Live", "Ren & Shrimpy", "Keenan & Kel", "Are You Afraid of the Dark?", "Ahh Real Monsters", "Spongebob", "The Amanda Show", "The Wild Thornberries", "Rocket Power", "Cat Dog", "Angry Beavers", "Fairly Odd Parents", "Legends of the Hidden Temple"],
                ["Dr. Seuss", "The Lorax", "Cat in the Hat", "Green Eggs and Ham", "Andy Lou Who", "The Grinch", "Thing 1 and Thing 2", "Truffala Trees", "Fish", "39 and ½ Foot Pole", "Horton", "Theodore Geisel", "Star-bellied Sneetch", "Sam I am", "Max"],
                ["Morale Royale", "Captain", "Karaoke", "Royal Caribbean", "Carnival", "Buffet", "Casino", "Pool Deck", "Formal Night", "Anchor", "Port", "Dock", "Excursion", "Cabin", "Stateroom", "Putt-Putt Golf", "Life Vest", "Titanic", "Comedy Show", "Beach", "Towel", "Swimsuit", "Sunglasses", "Sunscreen", "Spa", "Massage", "Jacuzzi", "Night Club", "Newlyweds", "Vacation", "Bahamas", "Cazumel", "Hair Braiding", "Kids Club", "Tourists", "Sandals", "Soft Serve Ice Cream"],
                ["Dance 'Merica", "Statue of Liberty", "Bald Eagle", "American Flag", "Fireworks", "Obama", "Golden Retriever", "Football", "Baseball", "BBQ", "Mount Rushmore", "Hot Dog", "Frat", "Miss America", "Shucking Corn", "McDonalds", "Jorts", "Oprah", "George Washington", "Beyonce", "Thanksgiving", "4th of July", "Black Friday", "Pearl Harbor", "Great Depression", "Civil War", "Prohibition", "Michael Jackson", "Forrest Gump", "United States", "Louis and Clark", "Sacagawea", "White House", "Grand Canyon", "Niagra Falls", "Declaration of Independence", "Martin Luther King Jr", "Secret Service", "The Kennedys", "NYPD", "FBI", "CIA", "Coca Cola", "New York", "Washington D.C."]
            ];
            for (var i = 0; i != this.Categories.length; ++i) {
                this.chosenCategories[i] = true;
            }
        };

        Model.prototype.changeWord = function () {
            var currentCategory = this.randomUsableCategory();
            this.currentWordCategory = currentCategory;
            this.currentItem = this.randomWordInCategory(currentCategory); //category, phrase in category

            for (var i = 0; i < this.recentlyUsedWords.length; ++i) {
                if (this.recentlyUsedWords[i]) {
                    if (this.currentItem == this.recentlyUsedWords[i]) {
                        this.changeWord();
                        break;
                    }
                } else {
                    console.log("game.recentlyUsedWords[i] not found");
                }

                if (this.recentlyUsedWords.length >= this.numberOfActivePhrases()) {
                    while (this.recentlyUsedWords.length != 0) {
                        this.recentlyUsedWords.pop();
                    }
                }
            }
        };

        Model.prototype.numberOfActiveCategories = function () {
            var count = 0;
            for (var i = 0; i != this.chosenCategories.length; ++i) {
                if (this.chosenCategories[i]) {
                    ++count;
                }
            }
            return count;
        };

        Model.prototype.numberOfActivePhrases = function () {
            var count = 0;
            for (var i = 0; i != this.chosenCategories.length; ++i) {
                if (this.chosenCategories[i]) {
                    count += (this.Categories[i].length - 1); // -1 is for first element which is name of category
                }
            }
            return count;
        };

        Model.prototype.randomUsableCategory = function () {
            var usableCategories = 0;
            for (var i = 0; i != this.chosenCategories.length; ++i) {
                if (this.chosenCategories[i] == true) {
                    ++usableCategories;
                }
            }

            //generate random number from 0 to usableCategories -1
            if (usableCategories > 0) {
                var returnCategory = 0;
                var categoryToUse = Math.floor((Math.random() * usableCategories));
                console.log("category#: " + categoryToUse);
                var i = 0;
                do {
                    if (this.chosenCategories[i] == false) {
                        ++categoryToUse; // increments forloop check as it encounters an unused category
                    }
                    ++i;
                } while(i <= categoryToUse);

                return categoryToUse;
            }
        };
        Model.prototype.gameCanStart = function () {
            for (var i = 0; i != this.chosenCategories.length; ++i) {
                if (this.chosenCategories[i] == true) {
                    console.log(i);
                    return true;
                }
            }
            return false;
        };
        Model.prototype.changeChosenCat = function (i) {
            if (i < this.chosenCategories.length) {
                if (this.chosenCategories[i]) {
                    this.chosenCategories[i] = false;
                } else {
                    this.chosenCategories[i] = true;
                }
            }
        };
        Model.prototype.randomWordInCategory = function (currentCategory) {
            var sizeOfCategory = this.Categories[currentCategory].length;
            var currentItemNumber = Math.floor((Math.random() * (sizeOfCategory - 1))) + 1;

            return this.Categories[currentCategory][currentItemNumber];
        };
        return Model;
    })();
    Game.Model = Model;
})(Game || (Game = {}));
var __extends = this.__extends || function (d, b) {
    for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p];
    function __() { this.constructor = d; }
    __.prototype = b.prototype;
    d.prototype = new __();
};
/// <reference path="GameView.ts" />
var Game;
(function (Game) {
    var GameTwo = (function (_super) {
        __extends(GameTwo, _super);
        function GameTwo() {
            _super.call(this);
            this.gameStarted = false;
            this.changeWord();
            this.activeTeam = 1;
            this.teamOneTimeLeft = 30;
            this.teamTwoTimeLeft = 30;
            this.teamOneScore = 0;
            this.teamTwoScore = 0;
            this.currentRound = 0;
            this.inBetweenRounds = false;
            this.totalRoundsOption = [1, 3, 5, 7, 9];
            this.totalRoundsOptionNumber = 0;
            this.totalRounds = this.totalRoundsOption[this.totalRoundsOptionNumber];
        }
        GameTwo.prototype.clearVariables = function () {
            _super.prototype.clearVariables.call(this);
            this.playingGame = false;
            this.activeTeam = 1;
            this.currentRound = 0;
            this.inBetweenRounds = false;
            this.teamOneTimeLeft = 30;
            this.teamTwoTimeLeft = 30;
            this.teamOneTotalTime = 0;
            this.teamTwoTotalTime = 0;
            this.teamOneScore = 0;
            this.teamTwoScore = 0;
            this.totalRoundsOptionNumber = 0;
            this.teamOneTotalTime = 0;
            this.teamTwoTotalTime = 0;
            this.totalRounds = this.totalRoundsOption[this.totalRoundsOptionNumber];
        };

        GameTwo.prototype.setGameView = function (gv) {
            this.gameView = gv;
        };
        GameTwo.prototype.changeActiveTeam = function () {
            if (this.activeTeam == 1) {
                this.activeTeam = 2;
            } else {
                this.activeTeam = 1;
            }
            this.newItem = true;
        };
        GameTwo.prototype.changeItem = function () {
            this.newItem = true;
        };
        GameTwo.prototype.clickLeftArrow = function (w, h) {
            this.slideRight(w, h);
        };
        GameTwo.prototype.clickRightArrow = function (w, h) {
            this.slideLeft(w, h);
        };
        GameTwo.prototype.setTotalRounds = function () {
            this.totalRounds = this.totalRoundsOption[this.totalRoundsOptionNumber % 5];
        };
        GameTwo.prototype.beginGame = function (height) {
            this.gameView.renderRoundNumber(height / 1.7, (height / 1.7) - (20 * height / 667), (height / 1.7) + (25 * height / 667), this.totalRounds, true, false);
        };
        GameTwo.prototype.slideLeft = function (width, height) {
            if (this.totalRoundsOptionNumber + 1 <= 4) {
                this.gameView.slideLeft(this.totalRoundsOption[(this.totalRoundsOptionNumber) % 5], this.totalRoundsOption[(++this.totalRoundsOptionNumber) % 5], width / 2, width + 70, (height / 1.7) - (20 * height / 667), (height / 1.7) + (25 * height / 667));
            }
        };
        GameTwo.prototype.slideRight = function (width, height) {
            if (this.totalRoundsOptionNumber - 1 >= 0) {
                this.gameView.slideRight(this.totalRoundsOption[(this.totalRoundsOptionNumber) % 5], this.totalRoundsOption[(--this.totalRoundsOptionNumber) % 5], width / 2, -70, (height / 1.7) - (20 * height / 667), (height / 1.7) + (25 * height / 667));
            }
        };
        GameTwo.prototype.selectedRoundNumber = function () {
            this.gameView.renderSelectedRoundNumber();
        };
        GameTwo.prototype.countdown = function () {
            this.gameView.renderCountdown();
        };

        GameTwo.prototype.notEnoughCategories = function () {
            this.gameView.renderNotEnoughCategories;
        };
        GameTwo.prototype.stopBouncingAnimations = function () {
            if (this.gameView.bouncingAnimation) {
                clearTimeout(this.gameView.bouncingAnimation);
            }
            if (this.gameView.slideRightAnimation) {
                clearTimeout(this.gameView.bouncingAnimation);
            }
            if (this.gameView.slideLeftAnimation) {
                clearTimeout(this.gameView.bouncingAnimation);
            }
        };
        GameTwo.prototype.startGame = function () {
            this.inBetweenRounds = false;
            this.playingGame = true;
            this.gameStarted = true;
            this.teamOneTimeLeft = 30;
            this.teamTwoTimeLeft = 30;
            this.teamOneTotalTime = 0;
            this.teamTwoTotalTime = 0;
            this.currentRound++;
            this.startGameForEachRound();
        };
        GameTwo.prototype.startGameForEachRound = function () {
            var act;
            if (this.activeTeam == 1) {
                act = this.teamOneTotalTime;
            } else {
                act = this.teamTwoTotalTime;
            }
            this.gameView.renderCurrentWordTwo(this.currentItem, act, this.activeTeam);
            var self = this;
            var f = function () {
                self.startGameForEachRound();
            };
            this.gameLoop = setTimeout(f, 100);
            if (this.teamOneTimeLeft < 0 || this.teamTwoTimeLeft < 0) {
                this.gameView.canDrawBalloons = true;
                if (this.currentRound == this.totalRounds) {
                    if (this.teamOneTotalTime > this.teamTwoTotalTime) {
                        ++this.teamTwoScore;
                    } else {
                        ++this.teamOneScore;
                    }
                    this.playingGame = false;
                    this.gameOver = true;
                    this.gameView.renderGameOverTwo(this.teamOneScore, this.teamTwoScore);
                } else {
                    if (this.teamOneTotalTime > this.teamTwoTotalTime) {
                        ++this.teamTwoScore;
                    } else {
                        ++this.teamOneScore;
                    }
                    this.playedWords.push(this.currentItem);
                    this.changeWord();
                    this.playingGame = false;
                    this.inBetweenRounds = true;
                    this.gameView.renderInBetweenRounds(this.teamOneScore, this.teamTwoScore, this.currentRound, this.totalRounds);
                }
                clearTimeout(this.gameLoop);
            }
            if (this.newItem) {
                this.playedWords.push(this.currentItem);
                this.changeWord();
                this.newItem = false;
            }
            if (this.activeTeam == 1) {
                this.teamOneTotalTime += .1;
                this.teamOneTimeLeft -= .1;
            } else {
                this.teamTwoTotalTime += .1;
                this.teamTwoTimeLeft -= .1;
            }
        };

        GameTwo.prototype.endGame = function () {
            if (this.gameLoop) {
                clearTimeout(this.gameLoop);
            }
        };
        return GameTwo;
    })(Game.Model);
    Game.GameTwo = GameTwo;
})(Game || (Game = {}));
/// <reference path="Model.ts" />
/// <reference path="GameOne.ts" />
/// <reference path="GameTwo.ts" />
var Game;
(function (Game) {
    var GameView = (function () {
        function GameView(resources, context, width, height, model) {
            this.resources = resources;
            this.nextRoundButton = this.resources.nextRoundButton;
            this.game_background = this.resources.game_background;
            this.game_background2 = this.resources.game_background2;
            this.forehead = this.resources.forehead;
            this.pass = this.resources.pass;
            this.roundPicking = this.resources.roundPicking;
            this.correct = this.resources.correct;
            this.endGame_background = this.resources.endGame_background;
            this.rightArrow = this.resources.rightArrow;
            this.leftArrow = this.resources.leftArrow;
            this.rightArrowPressed = this.resources.rightArrowPressed;
            this.leftArrowPressed = this.resources.leftArrowPressed;
            this.balloon = this.resources.balloon;
            this.context = context;
            this.width = width;
            this.height = height;
            this.model = model;
            this.startingHeight = 0;
        }
        GameView.prototype.renderForehead = function () {
            this.context.drawImage(this.forehead, 0, 0, this.width, this.height);
        };
        GameView.prototype.renderCountdown = function (timeLeft, height, counter) {
            this.clearCanvas();
            this.context.drawImage(this.game_background, 0, 0, this.width, this.height);
            this.drawNumber(timeLeft);
            var self = this;
            var timeout;
            this.drawCurveyBalloon(height, counter);
            if (timeLeft <= 0) {
                clearTimeout(timeout);
                this.model.canChange = true;
            } else {
                height -= 3;
                counter += 1;
                var f = function () {
                    self.renderCountdown(timeLeft - .01, height, counter);
                };
                timeout = setTimeout(f, 10);
            }
        };
        GameView.prototype.drawCurveyBalloon = function (height, counter) {
            var balloonHeight = 200 * this.height / 667;
            var balloonWidth = 190 * this.width / 375;
            var w = 50 * (Math.sin(counter * .02)) + 10;
            this.context.drawImage(this.balloon, w, height, balloonWidth, balloonHeight);
        };
        GameView.prototype.drawMenuTextHorizontal = function () {
            this.rotateContext();
            this.context.font = "30px AG Book Rounded";
            this.context.textBaseline = 'bottom';
            this.context.textAlign = 'left';
            this.context.fillStyle = 'blue';
            this.context.fillText("< Menu", -140 * this.width / 375, 65 * this.height / 667);
            this.context.restore();
        };
        GameView.prototype.drawMenuTextVertical = function () {
            this.context.font = "30px AG Book Rounded";
            this.context.textBaseline = 'bottom';
            this.context.textAlign = 'left';
            this.context.fillStyle = 'black';
            this.context.fillText("< Menu", 30 * this.width / 375, 60 * this.height / 667);
        };
        GameView.prototype.drawNumber = function (timeLeft) {
            this.rotateContext();
            this.context.font = "bold 80px AG Book Rounded";
            this.context.textBaseline = 'middle';
            this.context.textAlign = 'center';
            this.context.fillStyle = 'white';
            timeLeft = Math.floor(timeLeft);
            if (timeLeft == -1) {
                timeLeft = 0;
            }
            this.context.fillText(timeLeft, this.width / 2, this.height / 2.4);
            this.context.restore();
        };
        GameView.prototype.renderPass = function () {
            this.context.drawImage(this.pass, 0, 0, this.width, this.height);
        };

        GameView.prototype.renderCorrect = function () {
            this.context.drawImage(this.correct, 0, 0, this.width, this.height);
        };

        GameView.prototype.renderCurrentWordOne = function (currword, currTime) {
            this.clearCanvas();
            currTime = Math.round(currTime);
            this.context.drawImage(this.game_background, 0, 0, this.width, this.height);
            this.drawMenuTextHorizontal();
            this.printWord(currword);
            this.printTime(currTime);
        };

        GameView.prototype.renderCurrentWordTwo = function (currWord, teamTime, activeTeam) {
            this.clearCanvas();
            teamTime = Math.floor(teamTime);
            this.context.drawImage(this.game_background2, 0, 0, this.width, this.height);
            this.drawMenuTextHorizontal();
            this.printWord(currWord);
            this.printTimeTwo(teamTime, activeTeam);
        };

        GameView.prototype.balloonAnimation = function (print, h1, h2, h3, s1, s2, s3, count, image, drawMenu, inBetweenRounds) {
            var balloon_height = 100 / 667 * this.height;
            var balloon_width = 95 / 375 * this.width;
            var w1 = 30 / 375 * this.width;
            var w2 = 160 / 375 * this.width;
            var w3 = 300 / 375 * this.width;
            var t;
            if (this.balloonsInvisible(h1, h2, h3) || count == 0) {
                if (this.whichOneInvisible(h1, h2, h3) == 1) {
                    h1 = Math.floor((Math.random() * this.height + balloon_height + 50) + this.height);
                    s1 = Math.floor((Math.random() * 9) + 4);
                }
                if (this.whichOneInvisible(h1, h2, h3) == 2) {
                    h2 = Math.floor((Math.random() * this.height + balloon_height + 50) + this.height);
                    s2 = Math.floor((Math.random() * 9) + 4);
                }
                if (this.whichOneInvisible(h1, h2, h3) == 3) {
                    h3 = Math.floor((Math.random() * this.height + balloon_height + 50) + this.height);
                    s3 = Math.floor((Math.random() * 9) + 4);
                } else if (count == 0) {
                    h1 = Math.floor((Math.random() * this.height + balloon_height + 50) + this.height);
                    s1 = Math.floor((Math.random() * 9) + 4);
                    h2 = Math.floor((Math.random() * this.height + balloon_height + 50) + this.height);
                    s2 = Math.floor((Math.random() * 9) + 4);
                    h3 = Math.floor((Math.random() * this.height + balloon_height + 50) + this.height);
                    s3 = Math.floor((Math.random() * 9) + 4);
                }
            }
            if (this.canIDrawBalloons()) {
                this.clearCanvas();
                this.context.drawImage(image, 0, 0, this.width, this.height);
                if (inBetweenRounds) {
                    this.context.drawImage(this.nextRoundButton, this.width - 330 * this.width / 375, this.height - 100 * this.height / 667, 275 * this.width / 375, 100 * this.height / 667);
                }
                this.context.drawImage(this.balloon, w1, h1, balloon_width, balloon_height);
                this.context.drawImage(this.balloon, w2, h2, balloon_width, balloon_height);
                this.context.drawImage(this.balloon, w3, h3, balloon_width, balloon_height);
                if (drawMenu) {
                    this.drawMenuTextVertical();
                }
                print();
                h1 -= s1;
                h2 -= s2;
                h3 -= s3;
                var self = this;
                var hm = function () {
                    self.balloonAnimation(print, h1, h2, h3, s1, s2, s3, ++count, image, drawMenu, inBetweenRounds);
                };
                t = setTimeout(hm, 1000 / 60);
            } else {
                clearTimeout(t);
            }
        };
        GameView.prototype.canIDrawBalloons = function () {
            if (this.model instanceof Game.GameOne) {
                return (this.model.gameOver);
            } else {
                return (this.model.gameOver || this.model.inBetweenRounds);
            }
        };
        GameView.prototype.whichOneInvisible = function (h1, h2, h3) {
            var balloon_height = 100 / 667 * this.height;
            if (h1 < -balloon_height) {
                return 1;
            }
            if (h2 < -balloon_height) {
                return 2;
            }
            if (h3 < -balloon_height) {
                return 3;
            }
        };
        GameView.prototype.balloonsInvisible = function (h1, h2, h3) {
            var balloon_height = 100 / 667 * this.height;
            return (h1 < -balloon_height || h2 < -balloon_height || h3 < -balloon_height);
        };
        GameView.prototype.renderInBetweenRounds = function (teamOneScore, teamTwoScore, currentRound, totalRounds) {
            this.clearCanvas();
            var self = this;
            var f = function () {
                self.printRounds(teamOneScore, teamTwoScore, currentRound, totalRounds);
            };
            this.balloonAnimation(f, 0, 0, 0, 0, 0, 0, 0, this.game_background, true, true);
        };
        GameView.prototype.printRounds = function (teamOneScore, teamTwoScore, currentRound, totalRounds) {
            this.context.font = "50px AG Book Rounded";
            this.context.textBaseline = 'center';
            this.context.textAlign = 'center';
            this.context.fillStyle = "blue";
            this.context.fillText("ROUND " + currentRound + "/" + totalRounds, this.width / 2, this.height / 4);
            this.context.font = "40px AG Book Rounded";
            this.context.fillText("Team 1", this.width / 4, this.height / 2);
            this.context.fillText("Team 2", 3 * this.width / 4, this.height / 2);
            this.context.fillText(teamOneScore, this.width / 4, this.height / 1.8);
            this.context.fillText(teamTwoScore, 3 * this.width / 4, this.height / 1.8);
        };
        GameView.prototype.renderRoundNumber = function (height, top, bottom, rounds, up) {
            this.context.drawImage(this.roundPicking, 0, 0, this.width, this.height);
            this.renderRoundNumber1(height, top, bottom, rounds, up);
        };
        GameView.prototype.renderRoundNumber1 = function (height, top, bottom, rounds, up) {
            var self = this;

            this.clearCanvas();
            this.bouncingHeight = height;
            var self = this;
            if (up) {
                --height;
            } else {
                ++height;
            }
            if (height > bottom) {
                up = true;
            } else if (height < top) {
                up = false;
            }
            var f = function () {
                self.renderRoundNumber1(height, top, bottom, rounds, up);
            };
            this.bouncingAnimation = setTimeout(f, 20);
            this.context.drawImage(self.roundPicking, 0, 0, self.width, self.height);
            this.context.drawImage(this.rightArrow, 13.5 * this.width / 20, this.height / 2.5, 100 / 375 * this.width, 100 / 667 * this.height);
            this.context.drawImage(this.leftArrow, this.width / 20, this.height / 2.5, 100 / 375 * this.width, 100 / 667 * this.height);
            this.drawMenuTextVertical();
            this.context.font = "150px AG Book Rounded";
            if (rounds == "11") {
                this.context.font = "130px AG Book Rounded";
            }
            this.context.textBaseline = 'center';
            this.context.textAlign = 'center';
            this.context.fillStyle = "black";
            this.context.fillText(rounds, this.width / 2, height);
        };
        GameView.prototype.clickLeftArrow = function (currTime) {
        };
        GameView.prototype.clickRightArrow = function () {
        };
        GameView.prototype.slideLeft = function (rounds1, rounds2, width1, width2, top, bottom) {
            this.clearCanvas();
            var self = this;
            this.context.drawImage(self.roundPicking, 0, 0, this.width, this.height);
            width1 -= 5;
            width2 -= 5;
            clearTimeout(this.bouncingAnimation);
            var f = function () {
                self.slideLeft(rounds1, rounds2, width1, width2, top, bottom);
            };
            this.slideLeftAnimation = setTimeout(f, 5);
            if (width2 <= Math.round(this.width / 2)) {
                clearTimeout(this.slideLeftAnimation);
                this.renderRoundNumber1(this.bouncingHeight, top, bottom, rounds2, true);
            }
            this.context.font = "150px AG Book Rounded";
            if (rounds1 == "11") {
                this.context.font = "130px AG Book Rounded";
            }
            this.context.textBaseline = 'center';
            this.context.textAlign = 'center';
            this.context.fillText(rounds1, width1, this.bouncingHeight);
            this.context.font = "150px AG Book Rounded";
            if (rounds2 == "11") {
                this.context.font = "130px AG Book Rounded";
            }
            this.context.fillText(rounds2, width2, this.bouncingHeight);
            this.context.drawImage(this.rightArrow, 13.5 * this.width / 20, this.height / 2.5, 100 / 375 * this.width, 100 / 667 * this.height);
            this.context.drawImage(this.leftArrow, this.width / 20, this.height / 2.5, 100 / 375 * this.width, 100 / 667 * this.height);
            this.drawMenuTextVertical();
        };
        GameView.prototype.slideRight = function (rounds1, rounds2, width1, width2, top, bottom) {
            this.clearCanvas();
            var self = this;
            self.context.drawImage(self.roundPicking, 0, 0, self.width, self.height);
            width1 += 5;
            width2 += 5;
            clearTimeout(this.bouncingAnimation);
            var f = function () {
                self.slideRight(rounds1, rounds2, width1, width2, top, bottom);
            };
            this.slideRightAnimation = setTimeout(f, 5);
            if (width2 >= Math.round(this.width / 2)) {
                clearTimeout(this.slideRightAnimation);
                this.renderRoundNumber1(this.bouncingHeight, top, bottom, rounds2, true);
            }
            this.context.font = "150px AG Book Rounded";
            this.context.textBaseline = 'center';
            this.context.textAlign = 'center';
            if (rounds1 == "11") {
                this.context.font = "130px AG Book Rounded";
            }
            this.context.fillText(rounds1, width1, this.bouncingHeight);
            this.context.font = "150px AG Book Rounded";
            if (rounds2 == "11") {
                this.context.font = "130px AG Book Rounded";
            }
            this.context.fillText(rounds2, width2, this.bouncingHeight);
            this.context.drawImage(this.rightArrow, 13.5 * this.width / 20, this.height / 2.5, 100 / 375 * this.width, 100 / 667 * this.height);
            this.context.drawImage(this.leftArrow, this.width / 20, this.height / 2.5, 100 / 375 * this.width, 100 / 667 * this.height);
            this.drawMenuTextVertical();
        };
        GameView.prototype.renderSelectedRoundNumber = function () {
            clearTimeout(this.bouncingAnimation);
        };
        GameView.prototype.renderGameOverTwo = function (score1, score2) {
            this.clearCanvas();
            var self = this;
            var f = function () {
                self.printGameOverTwo(score1, score2);
            };
            this.balloonAnimation(f, 0, 0, 0, 0, 0, 0, 0, this.endGame_background, false, false);
        };
        GameView.prototype.printGameOverTwo = function (score1, score2) {
            this.context.font = "40px AG Book Rounded";
            this.context.textBaseline = 'center';
            this.context.textAlign = 'center';
            if (score1 > score2) {
                this.context.fillText("TEAM 1 WINS!", this.width / 2, this.height / 3);
            } else if (score1 == score2) {
                this.context.fillText("IT'S A TIE!", this.width / 2, this.height / 3);
            } else {
                this.context.fillText("TEAM 2 WINS!", this.width / 2, this.height / 3);
            }
        };
        GameView.prototype.renderGameOver = function (numItems, playedWords, correct) {
            this.clearCanvas();
            var self = this;
            var f = function () {
                self.printGameOver(numItems, playedWords, correct);
            };
            this.balloonAnimation(f, 0, 0, 0, 0, 0, 0, 0, this.endGame_background, false, false);
        };
        GameView.prototype.printGameOver = function (numItems, playedWords, correct) {
            console.log("numItems: " + numItems + " playedWords[0]: " + playedWords[0] + "correctBool: " + correct);

            var numCorrect = 0;
            var shiftUp = 0;
            for (var i = 0; i < numItems; ++i) {
                if (!correct[i]) {
                    this.context.fillStyle = "red";
                } else {
                    numCorrect++;
                    this.context.fillStyle = "green";
                }
                this.context.font = "20px AG Book Rounded";
                var printY = this.height * 1 / 4 + i * 23 - shiftUp * 23 - this.startingHeight;
                if (printY < this.height * 3 / 4 && printY > this.height * 1 / 8) {
                    this.context.fillText(playedWords[i], this.width / 2, printY);
                }
            }
            this.context.font = "40px AG Book Rounded";
            this.context.fillStyle = "white";
            this.context.fillText("Score " + (numCorrect) + "/" + numItems, this.width / 2, this.height * 1 / 8);
        };

        GameView.prototype.clearCanvas = function () {
            this.context.clearRect(0, 0, this.width, this.height);
        };

        GameView.prototype.printWord = function (currword) {
            this.context.font = "80px AG Book Rounded";
            this.context.textBaseline = 'middle';
            this.context.textAlign = 'center';
            this.rotateContext();
            this.context.fillStyle = "blue";
            var textWidth = this.context.measureText(currword).width;
            this.wrapText(this.context, currword, this.height / 4, this.width / 2, this.height, 89, "bold 60px AG Book Rounded");
            this.context.restore();
        };

        GameView.prototype.rotateContext = function () {
            this.context.save();
            this.context.translate(0, h * 3 / 4); //new origin
            this.context.rotate(-Math.PI / 2); //rotate counter-clockwise
        };

        GameView.prototype.wrapText = function (context, text, x, y, maxWidth, lineHeight, font) {
            //y-=10;
            var cars = text.split("\n");
            var lengthgr = false;
            if (text.length > 19) {
                lengthgr = true;
                context.font = font;
                lineHeight = 60;
            }

            for (var ii = 0; ii < cars.length; ii++) {
                var line = "";
                var words = cars[ii].split(" ");
                var isMultipleLines;
                for (var n = 0; n < words.length; n++) {
                    isMultipleLines = false;
                    var testLine = line + words[n] + " ";
                    var metrics = context.measureText(testLine);
                    var testWidth = metrics.width;

                    if (testWidth > maxWidth) {
                        isMultipleLines = true;
                        y = y / 1.25;
                        context.fillText(line, x, y);
                        line = words[n] + " ";
                        y += lineHeight;
                    } else {
                        line = testLine;
                    }
                }
                context.fillText(line, x, y - 5);
                y += lineHeight;
            }
        };
        GameView.prototype.printTime = function (timeLeft) {
            this.context.font = "30px AG Book Rounded";
            this.context.textBaseline = 'bottom';
            this.context.textAlign = 'center';
            this.rotateContext();
            this.context.fillStyle = "white";
            this.context.fillText('TIME REMAINING: ' + Math.floor(timeLeft), this.height / 4, this.width * 15 / 16);
            this.context.restore();
        };
        GameView.prototype.printTimeTwo = function (timeLeft, teamNumber) {
            this.context.font = "30px AG Book Rounded";
            this.context.textBaseline = 'bottom';
            this.context.textAlign = 'center';
            this.rotateContext();
            this.context.fillStyle = "white";
            this.context.fillText("TEAM " + teamNumber + ' TIME: ' + Math.floor(timeLeft), 170 * this.width / 375, 65 * this.height / 667);
            this.context.restore();
        };
        return GameView;
    })();
    Game.GameView = GameView;
})(Game || (Game = {}));
/// <reference path="GameView.ts" />
var Game;
(function (Game) {
    var GameOne = (function (_super) {
        __extends(GameOne, _super);
        function GameOne() {
            _super.call(this);
            this.gameStarted = false;
            this.changeWord();
            this.gameCount = 0;
        }
        GameOne.prototype.clearVariables = function () {
            _super.prototype.clearVariables.call(this);
            this.heldSideways = false;
            this.gameCount = 0;
            this.canChange = false;
        };

        GameOne.prototype.setGameView = function (gv) {
            this.gameView = gv;
        };
        GameOne.prototype.setRecentPassOrFail = function (p) {
            this.recentPassOrFail = p;
            this.newItem = true;
        };
        GameOne.prototype.beginGame = function () {
            this.gameView.renderForehead();
        };
        GameOne.prototype.countdown = function () {
            if (this.gameCount == 0) {
                this.gameView.renderCountdown(3.2, this.gameView.height, 0);
            }
            ++this.gameCount;
        };
        GameOne.prototype.notEnoughCategories = function () {
            this.gameView.renderNotEnoughCategories;
        };

        GameOne.prototype.setEndGameStartingHeight = function (startingHeight) {
            this.gameView.startingHeight = startingHeight;
        };

        GameOne.prototype.startGame = function (timeOfRound) {
            this.gameStarted = true;
            var self = this;
            var f = function () {
                self.startGame(timeOfRound);
            };
            this.gameLoop = setTimeout(f, 100);
            this.gameView.renderCurrentWordOne(this.currentItem, timeOfRound);
            if (timeOfRound <= 0) {
                //console.log("gameLoop Height! "+this.gameLoop.height);
                clearTimeout(this.gameLoop);
                this.gameOver = true;
                this.gameView.renderGameOver(this.playedWords.length, this.playedWords, this.correctPlayedWords);
            }
            if (this.newItem) {
                this.playedWords.push(this.currentItem);
                this.correctPlayedWords.push(this.recentPassOrFail);

                this.recentlyUsedWords.push(this.currentItem);

                console.log("len" + this.playedWords.length);
                console.log("cuur" + this.currentItem);
                this.changeWord();
                this.newItem = false;
            }
            if (this.heldSideways) {
                if (this.recentPassOrFail) {
                    this.gameView.renderCorrect();
                } else {
                    this.gameView.renderPass();
                }
            } else {
                timeOfRound = timeOfRound - 0.1;
            }
        };
        GameOne.prototype.endGame = function () {
            if (this.gameLoop) {
                clearTimeout(this.gameLoop);
            }
        };
        return GameOne;
    })(Game.Model);
    Game.GameOne = GameOne;
})(Game || (Game = {}));
/// <reference path="GameLoop.ts" />
/// <reference path="Model.ts" />
/// <reference path="GameOne.ts" />
/// <reference path="GameTwo.ts" />
var Game;
(function (Game) {
    var GameController = (function () {
        function GameController(gameloop, canvas, width, height, model) {
            this.gameloop = gameloop;
            this.canvas = canvas;
            this.width = width;
            this.height = height;
            this.model = model;
            this.gameShallStart = false;
            this.gamma = 0;
            this.gameLength = 60;
        }
        GameController.prototype.takeInput = function () {
            if (this.model instanceof Game.GameOne) {
                this.gameOneTakeInput();
            }
            if (this.model instanceof Game.GameTwo) {
                this.gameTwoTakeInput();
            }
        };

        GameController.prototype.gameOneTakeInput = function () {
            this.startGameOne();
        };

        GameController.prototype.endGameInput = function () {
            this.fingerLifted = false;
            this.startingHeight = 0;
            this.startingHeight = 0;
            this.oldY = 0;

            this.ScrollingEnd = this.ScrollingEnd.bind(this);
            this.endScrollingEnd = this.endScrollingEnd.bind(this);
            this.startClickEnd = this.startClickEnd.bind(this);

            //this.canvas.addEventListener("touchstart",this.startClickEnd);
            this.canvas.addEventListener("touchmove", this.ScrollingEnd);
            this.canvas.addEventListener("touchend", this.endScrollingEnd);
        };

        GameController.prototype.startClickEnd = function (event) {
            event.preventDefault();
            var canvas_x = event.targetTouches[0].pageX;
            var canvas_y = event.targetTouches[0].pageY;
            this.startX = canvas_x;
            this.startY = canvas_y;
            this.endY = canvas_y;
            this.endX = canvas_x;
        };
        GameController.prototype.ScrollingEnd = function (event) {
            event.preventDefault();
            var screenHeight = this.height - (this.height / 4);

            //var buttonHeight = screenHeight/7;
            var maxHeight = 23 * this.model.playedWords.length;
            var canvas_x = event.targetTouches[0].pageX;
            var canvas_y = event.targetTouches[0].pageY;
            console.log(this.startingHeight + "sh");
            if (this.fingerLifted) {
                this.startX = canvas_x;
                this.startY = canvas_y;
            }
            if (!this.fingerLifted) {
                var difference = this.oldY - canvas_y;
                var newStartingHeight = this.startingHeight + difference;

                if (newStartingHeight < 0) {
                    this.startingHeight = 0;
                } else {
                    this.startingHeight = newStartingHeight;
                }
                //this.categoriesView.renderCategories(Math.round(this.startingHeight),this.model.chosenCategories);
            }

            this.oldY = canvas_y;
            this.endY = canvas_y;
            this.endX = canvas_x;
            this.model.setEndGameStartingHeight(this.startingHeight);
            this.fingerLifted = false;
        };
        GameController.prototype.endScrollingEnd = function (event) {
            this.fingerLifted = true;
            console.log(this.startX + " " + this.endX);
            if (Math.abs(this.startX - this.endX) < 5) {
                if (Math.abs(this.startY - this.endY) < 5) {
                    //this.updateGame(this.endY)
                }
            }
        };

        GameController.prototype.startGameOne = function () {
            this.model.beginGame();
            var self = this;
            this.mobileClick = this.mobileClick.bind(this);
            this.canvas.addEventListener("click", this.mobileClick);
            var mostRecentState = 100;
            var mostRecentTimeItWasBeingHeldSideways;
            window.ondeviceorientation = function (event) {
                self.gamma = Math.round(event.gamma);
                if (self.gamma > 125 || self.gamma < 55) {
                    mostRecentTimeItWasBeingHeldSideways = new Date().getTime();
                }
                if (self.gamma > 125 && mostRecentState <= 125) {
                    self.model.setRecentPassOrFail(true); //they got the answer right
                    self.model.heldSideways = true;
                } else if (self.gamma < 55 && mostRecentState >= 55) {
                    self.model.setRecentPassOrFail(false); //they got the answer wrong
                    self.model.heldSideways = true;
                } else if (self.gamma >= 55 && self.gamma <= 125) {
                    self.gameShallStart = true;
                    while ((new Date().getTime()) - mostRecentTimeItWasBeingHeldSideways < 1000) {
                        //doNothing
                    }
                    self.model.heldSideways = false;
                }
                mostRecentState = self.gamma;
            };
            this.waitForGameOver();
            this.startDaGame();
        };
        GameController.prototype.startDaGame = function () {
            var self = this;
            var t;
            if (!this.model.gameStarted && this.gameShallStart) {
                console.log(this.model.gameCount);
                this.model.countdown();
                this.startAnothaGame();
            } else {
                var f = function () {
                    self.startDaGame();
                };
                t = setTimeout(f, 100);
            }
        };
        GameController.prototype.startAnothaGame = function () {
            if (this.model.canChange) {
                this.model.newItem = false;
                this.model.startGame(this.gameLength);
            } else {
                var self = this;
                var f = function () {
                    self.startAnothaGame();
                };
                var t = setTimeout(f, 100);
            }
        };

        GameController.prototype.gameCanStart = function () {
            return this.model.gameCanStart;
        };

        GameController.prototype.mobileClick = function (e) {
            var mobileClickY = event.y;
            mobileClickY -= this.canvas.offsetTop;
            var mobileClickX = event.x;
            mobileClickX -= this.canvas.offsetLeft;
            if (this.model.gameOver) {
                //this.endGameInput();
                this.gameOverClickOne(mobileClickX, mobileClickY);
            } else if (this.model.gameStarted) {
                this.BackToMenuClick(mobileClickX, mobileClickY);
            }
        };

        GameController.prototype.gameOverClickOne = function (X, Y) {
            var menuButton = (550 / 667) * this.height;
            if (Y > menuButton) {
                this.switchToMenuState();
            }
        };
        GameController.prototype.BackToMenuClick = function (X, Y) {
            var menuButtonY = (530 / 667) * this.height;
            var menuButtonX = (70 / 375) * this.width;
            if (Y > menuButtonY && X < menuButtonX) {
                this.model.endGame();
                this.switchToMenuState();
            }
        };

        GameController.prototype.gameTwoTakeInput = function () {
            this.startGameTwo();
        };

        GameController.prototype.startGameTwo = function () {
            this.mobileClickTwo = this.mobileClickTwo.bind(this);
            this.canvas.addEventListener("click", this.mobileClickTwo);
            this.model.beginGame(this.height);
        };
        GameController.prototype.mobileClickTwo = function (event) {
            var mobileClickY = event.y;
            mobileClickY -= this.canvas.offsetTop;
            var mobileClickX = event.x;
            mobileClickX -= this.canvas.offsetLeft;
            if (this.model.inBetweenRounds) {
                this.clickNextRoundOption(mobileClickX, mobileClickY);
            } else if (this.model.playingGame) {
                this.clickTwo(mobileClickX, mobileClickY);
            } else if (this.model.gameOver) {
                this.clickMenuOption(mobileClickX, mobileClickY);
            } else {
                this.clickSelectTotalRounds(mobileClickX, mobileClickY);
            }
        };

        GameController.prototype.clickNextRoundOption = function (X, Y) {
            var menuButton = (550 / 667) * this.height;
            if (Y > menuButton) {
                this.model.startGame();
            }
            if (X < 150 * this.width / 375 && Y < 100 * this.height / 667) {
                this.switchToMenuState();
            }
        };
        GameController.prototype.waitForGameOver = function () {
            if (this.model.gameOver) {
                this.endGameInput();
            } else {
                var t;
                var self = this;
                var f = function () {
                    self.waitForGameOver();
                };
                t = setTimeout(f, 50);
            }
        };
        GameController.prototype.clickMenuOption = function (X, Y) {
            var menuButton = (550 / 667) * this.height;
            if (Y > menuButton) {
                this.switchToMenuState();
            }
        };
        GameController.prototype.clickSelectTotalRounds = function (X, Y) {
            var leftArrowStartingX = (260 / 375) * this.width;
            var leftArrowStartingY = (250 / 667) * this.height;
            var leftArrowEndingY = (340 / 667) * this.height;
            if (X < 150 * this.width / 375 && Y < 100 * this.height / 667) {
                this.model.stopBouncingAnimations();
                this.switchToMenuState();
            }
            if (X > leftArrowStartingX && X < this.width) {
                if (Y > leftArrowStartingY && Y < leftArrowEndingY) {
                    this.model.clickRightArrow(this.width, this.height);
                }
            } else if (X > 0 && X < (150 / 375) * this.width) {
                if (Y > leftArrowStartingY && Y < leftArrowEndingY) {
                    this.model.clickLeftArrow(this.width, this.height);
                }
            } else {
                if (Y > 550 / 667 * this.height) {
                    this.model.setTotalRounds();
                    this.model.selectedRoundNumber();
                    this.model.startGame();
                }
            }
        };

        GameController.prototype.clickTwo = function (X, Y) {
            var buttonStartingX = 290 / 375 * this.width;
            var buttonEndingX = 360 / 375 * this.width;
            var CorrectStartingY = 10 / 667 * this.height;
            var CorrectEndingY = 330 / 667 * this.height;
            var PassStartingY = 370 / 667 * this.height;
            var PassEndingY = 650 / 667 * this.height;
            if (X > buttonStartingX && X < buttonEndingX) {
                if (Y > CorrectStartingY && Y < CorrectEndingY) {
                    this.model.changeActiveTeam();
                } else if (Y > PassStartingY && Y < PassEndingY) {
                    this.model.changeItem();
                }
            }
            this.BackToMenuClick(X, Y);
        };

        GameController.prototype.switchToMenuState = function () {
            this.switchStates();
            this.gameloop.switchToMenuState();
        };
        GameController.prototype.switchStates = function () {
            this.model.clearVariables();
            if (this.model instanceof Game.GameOne) {
                this.canvas.removeEventListener("click", this.mobileClick);
                this.canvas.removeEventListener("touchmove", this.ScrollingEnd);
                this.canvas.removeEventListener("touchend", this.endScrollingEnd);
            } else {
                this.canvas.removeEventListener("click", this.mobileClickTwo);
            }
        };
        return GameController;
    })();
    Game.GameController = GameController;
})(Game || (Game = {}));
/// <reference path="GameLoop.ts" />
var Game;
(function (Game) {
    var CategoriesController = (function () {
        function CategoriesController(gameloop, canvas, width, height, model, categoriesView) {
            this.gameloop = gameloop;
            this.canvas = canvas;
            this.width = width;
            this.height = height;
            this.startingHeight = 0;
            this.oldY = 0;
            this.model = model;
            this.categoriesView = categoriesView;
            this.categoriesView.setCategories(this.model.Categories, this.model.chosenCategories);
        }
        CategoriesController.prototype.takeInput = function () {
            this.Scrolling = this.Scrolling.bind(this);
            this.endScrolling = this.endScrolling.bind(this);
            this.startClick = this.startClick.bind(this);
            this.canvas.addEventListener("touchstart", this.startClick);
            this.canvas.addEventListener("touchmove", this.Scrolling);
            this.canvas.addEventListener("touchend", this.endScrolling);
        };
        CategoriesController.prototype.startClick = function (event) {
            event.preventDefault();
            var canvas_x = event.targetTouches[0].pageX;
            var canvas_y = event.targetTouches[0].pageY;
            this.startX = canvas_x;
            this.startY = canvas_y;
            this.endY = canvas_y;
            this.endX = canvas_x;
        };
        CategoriesController.prototype.Scrolling = function (event) {
            event.preventDefault();
            var screenHeight = this.height - (this.height / 4);
            var buttonHeight = screenHeight / 7;
            var maxHeight = buttonHeight * this.model.Categories.length;
            var canvas_x = event.targetTouches[0].pageX;
            var canvas_y = event.targetTouches[0].pageY;
            console.log(this.startingHeight + "sh");
            if (this.fingerLifted) {
                this.startX = canvas_x;
                this.startY = canvas_y;
            }
            if (!this.fingerLifted) {
                var difference = this.oldY - canvas_y;
                var newStartingHeight = this.startingHeight + difference;

                if (newStartingHeight < 0) {
                    this.startingHeight = 0;
                } else if (newStartingHeight + buttonHeight * 4 + -5 > (maxHeight)) {
                    this.startingHeight = this.startingHeight;
                } else {
                    this.startingHeight = newStartingHeight;
                }
                this.categoriesView.renderCategories(Math.round(this.startingHeight), this.model.chosenCategories);
            }

            this.oldY = canvas_y;
            this.endY = canvas_y;
            this.endX = canvas_x;

            this.fingerLifted = false;
        };
        CategoriesController.prototype.endScrolling = function (event) {
            this.fingerLifted = true;
            console.log(this.startX + " " + this.endX);
            if (Math.abs(this.startX - this.endX) < 5) {
                if (Math.abs(this.startY - this.endY) < 5) {
                    this.updateGame(this.endY);
                }
            }
        };

        CategoriesController.prototype.updateGame = function (canvas_y) {
            //var canvas_y = event.y;
            //canvas_y -= this.canvas.offsetTop;
            var screenHeight = this.height - (this.height / 4);
            var buttonHeight = screenHeight / 7;
            var gap = 0;
            var startingGap = this.height / 2.8;
            var menuButton = (560 / 667) * this.height;
            var click = this.startingHeight + canvas_y;
            if (canvas_y > startingGap && canvas_y <= menuButton) {
                var i = Math.floor((click - startingGap) / (buttonHeight + gap));
                this.model.changeChosenCat(i);
                this.categoriesView.renderCategories(this.startingHeight, this.model.chosenCategories);
            }
            if (canvas_y > menuButton) {
                var time = new Date().getTime();
                this.switchToMenuState(time, 1);
            }
        };

        CategoriesController.prototype.switchStates = function () {
            this.canvas.removeEventListener("touchmove", this.Scrolling);
            this.canvas.removeEventListener("touchend", this.endScrolling);
            this.canvas.removeEventListener("touchstart", this.startClick);
        };

        CategoriesController.prototype.switchToMenuState = function (time, count) {
            this.switchStates();
            this.gameloop.switchToMenuState();
        };
        return CategoriesController;
    })();
    Game.CategoriesController = CategoriesController;
})(Game || (Game = {}));
var Game;
(function (Game) {
    var CategoriesView = (function () {
        function CategoriesView(resources, context, width, height) {
            this.resources = resources;
            this.category_background = this.resources.category_background;
            this.category_background1 = this.resources.category_background1;
            this.context = context;
            this.width = width;
            this.height = height;
            this.font = "pt AG Book Rounded";
        }
        CategoriesView.prototype.setCategories = function (categories, boolcat) {
            this.categories = categories;
            this.boolCategories = boolcat;
        };

        CategoriesView.prototype.render = function () {
            this.renderCategories(0, this.boolCategories);
        };
        CategoriesView.prototype.fillRoundedRect = function (x, y, width, height) {
            var radius = 20;
            this.context.beginPath();
            this.context.moveTo(x + radius, y);
            this.context.lineTo(x + width - radius, y);
            this.context.quadraticCurveTo(x + width, y, x + width, y + radius);
            this.context.lineTo(x + width, y + height - radius);
            this.context.quadraticCurveTo(x + width, y + height, x + width - radius, y + height);
            this.context.lineTo(x + radius, y + height);
            this.context.quadraticCurveTo(x, y + height, x, y + height - radius);
            this.context.lineTo(x, y + radius);
            this.context.quadraticCurveTo(x, y, x + radius, y);
            this.context.closePath();
            this.context.fillStyle = "black";
            this.context.fill();
        };
        CategoriesView.prototype.drawText = function (rectX, rectY, width, height, text, color) {
            var fontSize = 30;
            var fontSizeString = fontSize.toString();
            this.context.font = fontSizeString + this.font;
            this.context.textAlign = "center";
            this.context.textBaseline = "middle";
            this.context.fillStyle = color;
            var metrics = this.context.measureText(text);
            var metricsWidth = metrics.width;
            while (metricsWidth >= width) {
                --fontSize;
                var fontSizeString = fontSize.toString();
                this.context.font = fontSizeString + this.font;
                metrics = this.context.measureText(text);
                metricsWidth = metrics.width;
            }

            this.context.fillText(text, rectX + (width / 2), rectY + (height / 2));
        };
        CategoriesView.prototype.renderCategories = function (startingHeight, boolCategories) {
            var self = this;
            this.clearCanvas();
            var screenHeight = this.height - (this.height / 4);
            var buttonHeight = screenHeight / 7;
            var totalScreenHeight = buttonHeight / 4;
            var tempStartingHeight = startingHeight;
            var h = screenHeight / 7;
            var gap = 0;
            var startingGap = this.height / 2.8;
            for (var i = 0; i != this.categories.length; ++i) {
                var width = this.width;
                var height = h;
                var rectX = 0;
                var rectY = startingGap - tempStartingHeight;
                if (boolCategories[i]) {
                    this.context.fillStyle = "#00FF00";
                } else {
                    this.context.fillStyle = "#FF3300";
                }
                this.context.globalAlpha = .5;
                this.context.fillRect(rectX, rectY, width, height);
                this.context.globalAlpha = 1;
                this.drawText(rectX, rectY, width, height, this.categories[i][0], "black");
                tempStartingHeight -= (h + gap);
            }
            console.log(startingHeight);

            //jason help
            this.context.globalAlpha = .7;
            var sizeOfAllCategoryBoxes = h * self.categories.length;
            var bottomStartingHeight = sizeOfAllCategoryBoxes - 4 * h;

            //bottom y value of scroll bar is startingGap + 3*h
            //startingHeight = 0 to bottomStartingHeight
            var scrollBarY = startingHeight / bottomStartingHeight * 3 * h + startingGap;
            if (scrollBarY > startingGap + 3 * h) {
                scrollBarY = startingGap + 3 * h;
            }
            this.context.fillRect(this.width - 10 * this.width / 375, scrollBarY, 10 * this.width / 375, h);
            this.context.globalAlpha = 1;
            this.drawCategoriesOverLay();
        };

        CategoriesView.prototype.drawCategoriesOverLay = function () {
            this.context.drawImage(this.category_background, 0, 0, this.width, this.height / 2.8);
            this.context.globalAlpha = 0.6;
            this.context.fillStyle = "black";
            this.context.fillRect(0, 0, this.width, this.height / 2.8);
            this.context.globalAlpha = 1;
            this.context.fillRect(0, this.height - (150 * this.height / 667), this.width, 150 * this.height / 667);
            this.context.globalAlpha = .9;
            this.drawText(0, this.height - 150 * this.height / 667, this.width, 150 * this.height / 667, "Menu", "white");
            this.drawText(0, 20, this.width, this.height / 2.8, "Categories", "white");
            this.context.globalAlpha = 1;
            this.context.globalAlpha = 1;
        };

        CategoriesView.prototype.clearCanvas = function () {
            this.context.clearRect(0, 0, this.width, this.height);
        };
        return CategoriesView;
    })();
    Game.CategoriesView = CategoriesView;
})(Game || (Game = {}));
/// <reference path="MenuController.ts" />
/// <reference path="MenuView.ts" />
/// <reference path="HelpController.ts" />
/// <reference path="HelpView.ts" />
/// <reference path="GameController.ts" />
/// <reference path="GameView.ts" />
/// <reference path="CategoriesController.ts" />
/// <reference path="CategoriesView.ts" />
/// <reference path="Model.ts" />
/// <reference path="GameOne.ts" />
/// <reference path="GameTwo.ts" />
/// <reference path="Resources.ts" />
var Game;
(function (Game) {
    var GameLoop = (function () {
        function GameLoop(canvas, context, width, height) {
            this.resources = new Game.Resources();
            this.canvas = canvas;
            this.context = this.canvas.getContext('2d');
            this.width = width;
            this.height = height;
            this.model = new Game.GameOne();

            this.view = new Game.MenuView(this.resources, context, width, height, 1);
            this.controller = new Game.MenuController(this, canvas, width, height, this.model, this.view);
            this.gameOne = new Game.GameOne();
            this.gameOne.gameLoop = this;
            this.gameTwo = new Game.GameTwo();
            this.currentGame = 1;
        }
        GameLoop.prototype.runGame = function () {
            if (this.resources.hasLoaded()) {
                this.controller.takeInput();
                this.view.render(this.currentGame);
            } else {
                var self = this;
                var f = function () {
                    self.runGame();
                };
                var t = setTimeout(f, 100);
            }
        };

        GameLoop.prototype.switchGameModes = function () {
            if (this.model instanceof Game.GameOne) {
                this.model = this.gameTwo;
                this.view.gameMode = 2;
                this.currentGame = 2;
                this.view.render(2);
            } else if (this.model instanceof Game.GameTwo) {
                this.model = this.gameOne;
                this.view.gameMode = 1;
                this.currentGame = 1;
                this.view.render(1);
            }
        };

        GameLoop.prototype.switchToGameState = function () {
            this.model.clearVariables();
            var newView = new Game.GameView(this.resources, this.context, this.width, this.height, this.model);
            this.view = newView;
            this.model.setGameView(newView);

            var newController = new Game.GameController(this, this.canvas, this.width, this.height, this.model);
            this.controller = newController;
            this.controller.takeInput();
        };

        GameLoop.prototype.switchToCategoriesState = function () {
            var newView = new Game.CategoriesView(this.resources, this.context, this.width, this.height);
            this.view = newView;

            var newController = new Game.CategoriesController(this, this.canvas, this.width, this.height, this.model, newView);
            this.controller = newController;
            this.view.render();
            this.controller.takeInput();
        };
        GameLoop.prototype.switchToMenuState = function () {
            var newView = new Game.MenuView(this.resources, this.context, this.width, this.height, this.currentGame);
            this.view = newView;
            this.view.render(this.currentGame);

            var newController = new Game.MenuController(this, this.canvas, this.width, this.height, this.model, newView);
            this.controller = newController;
            this.controller.takeInput();
        };

        GameLoop.prototype.switchToHelpState = function () {
            var newView = new Game.HelpView(this.resources, this.context, this.width, this.height, this.currentGame);
            this.view = newView;
            this.view.render(this.currentGame);

            var newController = new Game.HelpController(this, this.canvas, this.width, this.height, this.model, newView, this.currentGame);
            this.controller = newController;
            this.controller.takeInput();
        };
        return GameLoop;
    })();
    Game.GameLoop = GameLoop;
})(Game || (Game = {}));
/// <reference path="GameLoop.ts" />
var c = document.getElementById('canvas');
c.width = window.innerWidth;
c.height = window.innerHeight;
var w = window.innerWidth;
var h = window.innerHeight;
var ctx = c.getContext('2d');
ctx.font = "50px AG Book Rounded";

window.onload = function () {
    var game = new Game.GameLoop(c, ctx, w, h);
    game.runGame();
};
