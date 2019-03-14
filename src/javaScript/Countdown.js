//Create enum displayDate
const DisplayDate = ({
    seconds: '(distance % (1000 * 60)) / 1000',
    minutes: '(distance % (1000 * 60 * 60)) / (1000 * 60)',
    hours: "(distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)",
    days: "distance / (1000 * 60 * 60 * 24)",
    weeks: "distance / (1000 * 60 * 60 * 24 * 7)",
    months: "distance / (1000 * 60 * 60 * 24 * 7 * 12)",
    years: "distance / (1000 * 60 * 60 * 24 * 365)"
});

//Class Countdown
class Countdown {
    
    //Constructor of the class
    constructor(countdownName, date, dateMap) {
        //Check if countdownName, date and dateMap is null
        if (countdownName == null && date == null && dateMap == null) {
            console.error("A property of the class constructor is undefined!");
        } else {
            //Set variables
            this.countdownName = countdownName;
            this.date = date;
            this.dateMap = dateMap;
            this.subCountdownMap = new Map();
            this.divideTime = false;
        }
    }

    //Starts the ticker
    startTicker() {
        //Check if string titleElementID is null
        if (this.titleElementID != null) {
            document.getElementById(this.titleElementID).innerHTML = this.countdownTitle;
        }

        //Create and set variables
        var date = this.date;
        var elementID = this.elementID;
        var timeOutText = this.timeOutText;
        var dateMap = this.dateMap;
        var subCountdownMap = this.subCountdownMap;
        var countdownName = this.countdownName;
        var divideTime = this.divideTime;

        //Call function every second
        var x = setInterval(function () {
            var currentDate = new Date().getTime();
            var distance = date - currentDate;
            
            if (distance < 0) {
                clearInterval(x);
                
                //Get all entries form subCountdownMap
                for (const [k, v] of subCountdownMap.entries()) {
                    if (k !== countdownName) {
                        v.addSubCountdownMap(subCountdownMap);
                        v.startTicker();
                        subCountdownMap.delete(k);
                        return;
                    }
                }
                
                //Get element by id and set their text
                document.getElementById(this.elementID).innerHTML = timeOutText;
            } else {
                var timeString = "";

                //Get all entries from dateMap and loop their valuess
                for (const [k, v] of dateMap.entries()) {
                    //Check if divideTime boolean is true
                    if (divideTime) {
                        //Check if value from methode getElementById is not null
                        if (document.getElementById(k) != null) {
                            document.getElementById(k).innerHTML = Math.floor(this.eval(v.replace("distance", distance))).toString(10);
                        } else {
                            console.error("Cant find the elementID " + k + " by countdown " + countdownName);
                        }
                    } else {
                        timeString = timeString + k + ": " + Math.floor(this.eval(v.replace("distance", distance))) + " / ";
                    }
                }

                if (!divideTime) {
                    document.getElementById(elementID).innerHTML = timeString;
                }
            }
        }, 1000);
    }

    //Add add new Countdown object to the subCountdownMap
    addSubCountdown(countdownObj) {
        if (this.subCountdownMap.has(countdownObj.getCountdownName)) {
            console.error("Error the subCountdown with the name `" + countdownObj.getCountdownName + "` already exists!");
        } else {
            this.subCountdownMap.set(countdownObj.getCountdownName, countdownObj);
        }
    }

    //Replace the subCountdownMap with the value in the methode
    addSubCountdownMap(subCountdownMap) {
        if (this.subCountdownMap === subCountdownMap) {
            console.error("Error subCountdownMap already defined!");
        } else {
            this.subCountdownMap = subCountdownMap;
        }
    }

    //Defined the title of the countdown where the titleElementID
    setCountdownTitle(countdownTitle, titleElementID) {
        this.countdownTitle = countdownTitle;
        this.titleElementID = titleElementID;
        return this;
    }

    //Defined the elementID for the countdown text
    setElementID(elementID) {
        if (elementID === undefined) {
            console.log("Property ElementID is not set");
        } else {
            this.elementID = elementID;
        }
        return this;
    }

    //Defined the text when the countdown finished
    setTimeOutText(timeout) {
        if (timeout === undefined) {
            console.log("Property TimeOut is not set");
        } else {
            this.timeOutText = timeout;
        }
        return this;
    }

    //Set the value of the divideTime boolean
    setDivideTime(bol) {
        this.divideTime = bol;
        return this;
    }

    //Gives the CountdownName back 
    get getCountdownName() {
        return this.countdownName;
    }

    //Gives the ElementID bakc
    get getElementID() {
        return this.elementID;
    }

    //Gives the TimeOutText back
    get getTimeOutText() {
        return this.timeOutText;
    }
}


