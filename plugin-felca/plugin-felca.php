<?php
/**
 * Plugin Name: Plugin Felca
 * Pluigin URI: 
 * Description: PLugin que adiciona uma calculadora no menu.
 * Version: 0.1
 * Author: Felcagod
 * Author URI: 
 */

add_action('admin_menu', 'pone_register_menus');

function pone_register_menus(){
    add_options_page('Plugin wagner','aCalculador','manage_options', 'pone_hello_page', 'pone_render_page');

}
function pone_render_page(){
   ?>
   <head>
        <link rel='stylesheet' href="./style.css">
    </head>
    <style type="text/css">
        body {
   background-color: transparent;
   font-family: Helvetica ,Arial, sans-serif;
   font-weight: 50;
   
}
h1, h2, a {
   color: white;
   text-align: center;
}
h2 {
   margin-top: 50px;
}
#container {
   margin: auto;
   margin-top: 50px;
   font-size: 50px;
   display: grid;
   width: 228px;
   height: 320px;
   border-radius: 5px;
   font-size: 0px;
   
}
#display {
   background-color: rgb(43,41,46);
   border-radius: 5px;
   border-bottom-left-radius: 0px;
   border-bottom-right-radius: 0px;
   height: 80px;
   font-size: 21px;
   color: white;
   text-align: right;
   padding-left: 15px;
   padding-right: 15px;
   line-height: 100px;
}
button {
   width: 57px;
   height: 50px;
   padding: 0px;
   margin: 0px;
   border-color: rgb(43,40,46);
   background-color: rgb(95,93,97);
   color: white;
   font-size: 21px;
   
}



#rowOne :nth-child(1) {
   background-color: rgb(73,65,65);
}
#rowOne :nth-child(2) {
   background-color: rgb(73,65,65);

}
#rowOne :nth-child(3) {
   background-color: rgb(73,65,65);

}
#rowOne :last-child {
   background-color: rgb(253,158,43);
}
#rowTwo :last-child {
   background-color: rgb(253,158,43);
}
#rowThree :last-child {
   background-color: rgb(253,158,43);
}
#rowFour :last-child {
   background-color: rgb(253,158,43);
}
#rowFive :first-child {
   width: 114px;
   border-bottom-left-radius: 5px;
   text-align: left;
   padding-left: 21px;
}
#rowFive :last-child {
   background-color: rgb(253,158,43);
   border-bottom-right-radius: 5px;
}
    </style>
   
    <body>
        <h1></h1>
        <div id='container'>
                        <div id='display'>0</div>
                        <div class='calculatorKeys'>
                                <div id='rowOne'>
                                       <button id='clear'>AC</button> 
                                       <button id='negate'>+/-</button>
                                       <button id='percent'>%</button>
                                       <button id='divide'>/</button>
                                </div>
                                <div id='rowTwo'>
                                        <button id='seven'>7</button>
                                        <button id='eight'>8</button>
                                        <button id='nine'>9</button>
                                        <button id='multiply'>x</button>
                        
                                </div>
                                <div id='rowThree'>
                                        <button id='four'>4</button>
                                        <button id='five'>5</button>
                                        <button id='six'>6</button>
                                        <button id='minus'>-</button>
                        
                        
                                </div>
                                <div id='rowFour'>
                                        <button id='one'>1</button>
                                        <button id='two'>2</button>
                                        <button id='three'>3</button>
                                        <button id ='plus'>+</button>
                                </div>
                                <div id='rowFive'>
                                        <button id='zero'>0</button>
                                        <button id='dot'>.</button>
                                        <button id='equals'>=</button>
                                </div>
                        </div>
        </div>
        <script type="text/javascript">
  let currentNumber = '0'
let previousNumber = '0';
let calculation = '';

let display = document.getElementById('display').innerHTML = currentNumber;

let clear = document.getElementById('clear');

let zero = document.getElementById('zero');
let one = document.getElementById('one');
let two = document.getElementById('two');
let three = document.getElementById('three');
let four = document.getElementById('four');
let five = document.getElementById('five');
let six = document.getElementById('six');
let eight = document.getElementById('eight');
let seven = document.getElementById('seven');
let nine  = document.getElementById('nine');

let dot = document.getElementById('dot');
let plus = document.getElementById('plus');
let minus = document.getElementById('minus');
let multiply = document.getElementById('multiply');
let divide = document.getElementById('divide');
let percent = document.getElementById('percent');
let negate = document.getElementById('negate');
let equals = document.getElementById('equals');

zero.addEventListener('mousedown', function() {
        zero.style.backgroundColor = 'rgb(159,157,160)'
        if (currentNumber.length < 14) {
            if (currentNumber == '0') {
                return
            }
            else {
                document.getElementById('display').innerHTML = currentNumber + '0';
                currentNumber += '0'
            }
        }
})

one.addEventListener('mousedown', function() {
    one.style.backgroundColor = 'rgb(159,157,160)'
    if (currentNumber.length < 7) {
        if (currentNumber == '0') {
            document.getElementById('display').innerHTML = '1';
            currentNumber = '1'
        }
        else {
            document.getElementById('display').innerHTML = currentNumber + '1';
            currentNumber += '1'
        }
    }  
})
two.addEventListener('mousedown', function() {
    two.style.backgroundColor = 'rgb(159,157,160)'
    if (currentNumber.length < 7) {
        if (currentNumber == '0') {
            document.getElementById('display').innerHTML = '2';
            currentNumber = '2'
        }
        else {
            document.getElementById('display').innerHTML = currentNumber + '2';
            currentNumber += '2'
        }
    }
})
three.addEventListener('mousedown', function() {
    three.style.backgroundColor = 'rgb(159,157,160)'
    if (currentNumber.length < 7) {
        if (currentNumber == '0') {
            document.getElementById('display').innerHTML = '3';
            currentNumber = '3'
        }
        else {
            document.getElementById('display').innerHTML = currentNumber + '3';
            currentNumber += '3'
        }
    }
})
four.addEventListener('mousedown', function() {
    four.style.backgroundColor = 'rgb(159,157,160)'
    if (currentNumber.length < 7) {
        if (currentNumber == '0') {
            document.getElementById('display').innerHTML = '4';
            currentNumber = '4'
        }
        else {
            document.getElementById('display').innerHTML = currentNumber + '4';
            currentNumber += '4'
        }
    }
})
five.addEventListener('mousedown', function() {
    five.style.backgroundColor = 'rgb(159,157,160)'
    if (currentNumber.length < 7) {
        if (currentNumber == '0') {
            document.getElementById('display').innerHTML = '5';
            currentNumber = '5'
        }
        else {
            document.getElementById('display').innerHTML = currentNumber + '5';
            currentNumber += '5'
        }
    }
})
six.addEventListener('mousedown', function() {
    six.style.backgroundColor = 'rgb(159,157,160)'
    if (currentNumber.length < 7) {
        if (currentNumber == '0') {
            document.getElementById('display').innerHTML = '6';
            currentNumber = '6'
        }
        else {
            document.getElementById('display').innerHTML = currentNumber + '6';
            currentNumber += '6'
        }
    }
})
seven.addEventListener('mousedown', function() {
    seven.style.backgroundColor = 'rgb(159,157,160)'
    if (currentNumber.length < 7) {
        if (currentNumber == '0') {
            document.getElementById('display').innerHTML = '7';
            currentNumber = '7'
        }
        else {
            document.getElementById('display').innerHTML = currentNumber + '7';
            currentNumber += '7'
        }
    }
})
eight.addEventListener('mousedown', function() {
    eight.style.backgroundColor = 'rgb(159,157,160)'
    if (currentNumber.length < 7) {
        if (currentNumber == '0') {
            document.getElementById('display').innerHTML = '8';
            currentNumber = '8'
        }
        else {
            document.getElementById('display').innerHTML = currentNumber + '8';
            currentNumber += '8'
        }
    }
})
nine.addEventListener('mousedown', function() {
    nine.style.backgroundColor = 'rgb(159,157,160)'
    if (currentNumber.length < 7) {
        if (currentNumber == '0') {
            document.getElementById('display').innerHTML = '9';
            currentNumber = '9'
        }
        else {
            document.getElementById('display').innerHTML = currentNumber + '9';
            currentNumber += '9'
        }
    }
})
dot.addEventListener('mousedown', function() {
    dot.style.backgroundColor = 'rgb(159,157,160)'
    if (currentNumber.includes('.')) {
        return;
    }
    else {
        document.getElementById('display').innerHTML = currentNumber + '.';
        currentNumber += '.'
    }
})
clear.addEventListener('mousedown', function() {
    clear.style.backgroundColor = 'rgb(95,93,97)';
    document.getElementById('display').innerHTML = '0';
    document.getElementById('display').style.fontSize = '47px'
    
    if (currentNumber != '0') {
        currentNumber = '0' 
    }
    else if (currentNumber == '0') {
        previousNumber = '0'
        currentNumber = '0';
    }

    calculation = '';
})
plus.addEventListener('mousedown', function() {
    plus.style.backgroundColor = 'rgb(201,125,32)'
    previousNumber = currentNumber;
    currentNumber = '0';
    calculation = '+';
})
minus.addEventListener('mousedown', function() {
    minus.style.backgroundColor = 'rgb(201,125,32)';
    previousNumber = currentNumber;
    currentNumber = '0'; 
    calculation = '-';
})
divide.addEventListener('mousedown', function() {
    divide.style.backgroundColor = 'rgb(201,125,32)';
    previousNumber = currentNumber;
    currentNumber = '0'
    calculation = '/';
})
multiply.addEventListener('mousedown', function() {
    multiply.style.backgroundColor = 'rgb(201,125,32)';
    previousNumber = currentNumber;
    currentNumber = '0'
    calculation = 'x';
})
percent.addEventListener('mousedown', function() {
    percent.style.backgroundColor = 'rgb(95,93,97)';
    currentNumber /= 100;
    document.getElementById('display').innerHTML = currentNumber

})
negate.addEventListener('mousedown', function() {
    negate.style.backgroundColor = 'rgb(95,93,97)';
    if (currentNumber != '0') {
        if (currentNumber.includes('-')) {
            currentNumber = currentNumber.replace('-','');
        }
        else {
            currentNumber = '-'+currentNumber;
        }
        document.getElementById('display').innerHTML = currentNumber;
    }

})
equals.addEventListener('mousedown', function() {
    equals.style.backgroundColor = 'rgb(201,125,32)';
    previousNumber = Number(previousNumber);
    currentNumber = Number(currentNumber);
    switch(calculation) {
        case '+': currentNumber = previousNumber + currentNumber; break;
        case '-': currentNumber = previousNumber - currentNumber; break;
        case 'x': currentNumber = previousNumber * currentNumber; break;
        case '/': if (currentNumber == 0) {
            currentNumber = String('Not a Number');
        }
        else {
            currentNumber = previousNumber / currentNumber;
        }
    }
    if (currentNumber % 1 == 0) {
        document.getElementById('display').innerHTML = currentNumber  
    }
    else {

        document.getElementById('display').innerHTML = currentNumber.toFixed(2);
    }
    
    previousNumber = String(previousNumber);
    currentNumber = String(currentNumber);
})


clear.addEventListener('mouseup', function() {
    clear.style.backgroundColor = 'rgb(73,65,65)'
})
negate.addEventListener('mouseup', function() {
    negate.style.backgroundColor = 'rgb(73,65,65)'
})
percent.addEventListener('mouseup', function() {
    percent.style.backgroundColor = 'rgb(73,65,65)'
})
zero.addEventListener('mouseup', function() {
    zero.style.backgroundColor = 'rgb(95,93,97)'

})
one.addEventListener('mouseup', function() {
    one.style.backgroundColor = 'rgb(95,93,97)'
})
two.addEventListener('mouseup', function() {
    two.style.backgroundColor = 'rgb(95,93,97)'
})
three.addEventListener('mouseup', function() {
    three.style.backgroundColor = 'rgb(95,93,97)'
})
four.addEventListener('mouseup', function() {
    four.style.backgroundColor = 'rgb(95,93,97)'
})
five.addEventListener('mouseup', function() {
    five.style.backgroundColor = 'rgb(95,93,97)'
})
six.addEventListener('mouseup', function() {
    six.style.backgroundColor = 'rgb(95,93,97)'
})
seven.addEventListener('mouseup', function() {
    seven.style.backgroundColor = 'rgb(95,93,97)'
})
eight.addEventListener('mouseup', function() {
    eight.style.backgroundColor = 'rgb(95,93,97)'
})
nine.addEventListener('mouseup', function() {
    nine.style.backgroundColor = 'rgb(95,93,97)'
})
dot.addEventListener('mouseup', function() {
    dot.style.backgroundColor = 'rgb(95,93,97)'
})
plus.addEventListener('mouseup', function() {
    plus.style.backgroundColor = 'rgb(253,158,43)'
})
minus.addEventListener('mouseup', function() {
    minus.style.backgroundColor = 'rgb(253,158,43)';
})
divide.addEventListener('mouseup', function() {
    divide.style.backgroundColor = 'rgb(253,158,43)';
})
multiply.addEventListener('mouseup', function() {
    multiply.style.backgroundColor = 'rgb(253,158,43)';
})
equals.addEventListener('mouseup', function() {
    equals.style.backgroundColor = 'rgb(253,158,43)';
})
</script>
    </body>
<?php 
}
?>