function xuxian(ctx, x1, y1, x2, y2)  
{
    ctx.beginPath();
    ctx.strokeStyle="black";
    var length = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
    var num = Math.floor(length / 3);  
      
    for(var i = 0 ; i < num; i++)  
    {  
        ctx[i % 2 == 0 ? 'moveTo' : 'lineTo'](x1 + (x2 - x1) / num * i, y1 + (y2 - y1) / num * i);  
    }  
    ctx.stroke();  
}

function jihe_init(c)
{
var ctx=c.getContext("2d");

ctx.strokeStyle="black";
ctx.rect(20, 20, 100, 100);
ctx.stroke();

ctx.beginPath();
ctx.strokeStyle="blue";
ctx.moveTo(120, 20);
ctx.lineTo(207, 70);
ctx.stroke();


ctx.beginPath();
ctx.strokeStyle="blue";
ctx.moveTo(120, 120);
ctx.lineTo(207, 70);
ctx.stroke();

ctx.beginPath();
ctx.strokeStyle="green";
ctx.moveTo(20, 20);
ctx.lineTo(207, 70);
ctx.stroke();

ctx.beginPath();
ctx.font="14px Arial"; 
ctx.fillText("A", 8, 26);
ctx.fillText("B", 8, 126);
ctx.fillText("C", 128, 126);
ctx.fillText("D", 122, 18);
ctx.fillText("E", 209, 86);
ctx.stroke();

ctx.beginPath();
ctx.strokeStyle="red";
ctx.arc(207, 70, 30, 1.08 * Math.PI, 1.18 * Math.PI);
ctx.stroke();

ctx.font="8px Arial";
ctx.fillStyle = "red";
ctx.fillText("15", 166, 59);
ctx.stroke();
}

function jihe_init2(c)
{
jihe_init(c);
var ctx=c.getContext("2d");

xuxian(ctx, 20, 20, 120, 120);

ctx.strokeStyle="red";
ctx.beginPath();
ctx.arc(120, 20, 10, 0.167 * Math.PI, 0.5 * Math.PI);
ctx.stroke();
ctx.beginPath();
ctx.arc(120, 120, 10, 1.5 * Math.PI, 1.833 * Math.PI);
ctx.stroke();
ctx.beginPath();
ctx.arc(20, 20, 20, 0.0833 * Math.PI, 0.25 * Math.PI);
ctx.stroke();
ctx.beginPath();
ctx.arc(20, 20, 30, 0, 0.0833 * Math.PI);
ctx.stroke();

ctx.font="10px Arial"; 
ctx.fillStyle = "red";
ctx.fillText("θ", 126, 40);
ctx.fillText("θ", 126, 110);
ctx.fillText("θ-30", 40, 40);
ctx.fillText("75-θ", 52, 29);
ctx.stroke();
}

function jihe_init3(c)
{
jihe_init(c);
var ctx=c.getContext("2d");

xuxian(ctx, 0, 70, 260, 70);

ctx.beginPath();
ctx.strokeStyle="red";
ctx.moveTo(20, 20);
ctx.lineTo(240, 70);
ctx.stroke();

ctx.beginPath();
ctx.strokeStyle="red";
ctx.moveTo(120, 20);
ctx.lineTo(240, 70);
ctx.stroke();

ctx.beginPath();
ctx.font="14px Arial";
ctx.fillText("E'", 240, 86);
ctx.stroke();
}


jihe_init(document.getElementById("myCanvas"));
jihe_init2(document.getElementById("myCanvas2"));
jihe_init3(document.getElementById("myCanvas3"));

