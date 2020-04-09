import pi_simulation from './modules/pi_simulation.js'
import test from './modules/test.js'
import afisor from './modules/afisor.js'

var myp5 = new p5(new afisor([
    document.getElementById("start-c0"),
    document.getElementById("stop-c0"),
    document.getElementById("reset-c0")
]).scetch, 'canvas_0');

var myp5 = new p5(new test([
    document.getElementById("start-c1"),
    document.getElementById("stop-c1"),
    document.getElementById("reset-c1")
]).scetch, 'canvas_1');

var myp5 = new p5(new pi_simulation([
    document.getElementById("start-c2"),
    document.getElementById("stop-c2"),
    document.getElementById("reset-c2")
]).scetch, 'canvas_2');