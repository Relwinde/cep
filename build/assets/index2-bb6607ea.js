$(function(d){var e=document.getElementById("deals");e.height="209";var a=e.getContext("2d"),o=a.createLinearGradient(0,0,0,380);o.addColorStop(0,"#09ad95"),o.addColorStop(1,"#09ad95"),new Chart(e,{type:"bar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun","Aug","Sep"],datasets:[{label:"Current Deals",data:[16,14,12,14,16,15,12,14,18,10],backgroundColor:o,hoverBackgroundColor:o,hoverBorderWidth:2,hoverBorderColor:o,barThickness:15}]},options:{responsive:!0,maintainAspectRatio:!1,tooltips:{mode:"index",titleFontSize:12,titleFontColor:"#000",bodyFontColor:"#000",backgroundColor:"#fff",cornerRadius:3,intersect:!1},plugins:{legend:{display:!1}},scales:{x:{display:!0,grid:{display:!1},ticks:{color:"#77778e"}},y:{display:!1,grid:{display:!1}}},title:{display:!1,text:"Normal Legend"}}});var r=document.getElementById("total-coversations").getContext("2d");new Chart(r,{type:"line",data:{labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],datasets:[{label:"Total-Transactions",data:[0,50,0,100,50,130,100,140,50,0,100,50,130,100,140],backgroundColor:"transparent",borderColor:"#0774f8",borderWidth:4,lineTension:.3,pointBackgroundColor:"#0774f8",pointRadius:3}]},options:{responsive:!0,maintainAspectRatio:!1,plugins:{legend:{display:!1}},scales:{x:{display:!0,grid:{display:!0,color:"rgba(119, 119, 142, 0.2)"},ticks:{color:"#77778e"}},y:{color:"rgba(119, 119, 142, 0.2)",grid:{display:!1},ticks:{color:"#77778e"}}}}}),new Morris.Donut({element:"morrisBar8",data:[{value:23,label:"Excellent"},{value:16,label:"Good"},{value:10,label:"Average"},{value:15,label:"Bad"}],backgroundColor:"rgba(119, 119, 142, 0.1)",labelColor:"#77778e",colors:["#0774f8","#d43f8d","#09ad95","#f5334f"],formatter:function(t){return t+"%"},resize:!0}).on("click",function(t,l){console.log(t,l)});var e=document.getElementById("revenue");e.height="300";var a=e.getContext("2d");new Chart(e,{type:"bar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun"],datasets:[{label:"total profit",data:[15,18,12,14,10,15,7,14],backgroundColor:"#d43f8d",hoverBackgroundColor:"#d43f8d",hoverBorderWidth:2,hoverBorderColor:"#d43f8d",barPercentage:.5},{label:"Total sales",data:[10,14,10,15,9,14,15,20],backgroundColor:"#0774f8",hoverBackgroundColor:"#0774f8",hoverBorderWidth:3,hoverBorderColor:"#0774f8",barPercentage:.5}]},options:{responsive:!0,maintainAspectRatio:!1,tooltips:{mode:"index",titleFontSize:12,titleFontColor:"#000",bodyFontColor:"#000",backgroundColor:"#fff",cornerRadius:3,intersect:!1},plugins:{legend:{display:!1}},scales:{x:{grid:{display:!0,color:"rgba(119, 119, 142, 0.2)"},ticks:{color:"#77778e"}},y:{grid:{display:!0,color:"rgba(119, 119, 142, 0.2)"},ticks:{color:"#77778e"}}},title:{display:!1,text:"Normal Legend"}}});var e=document.getElementById("areaChart1");e.height="300";var a=e.getContext("2d");new Chart(e,{type:"line",data:{labels:["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],datasets:[{label:"Market value",data:[30,70,30,100,50,130,100,140],backgroundColor:"transparent",borderColor:"#d43f8d",pointBackgroundColor:"#fff",pointHoverBackgroundColor:"#d43f8d",pointBorderColor:"#d43f8d",pointHoverBorderColor:"#d43f8d",pointBorderWidth:2,lineTension:.3,pointRadius:2,pointHoverRadius:2,borderWidth:4}]},options:{responsive:!0,maintainAspectRatio:!1,tooltips:{mode:"index",titleFontSize:12,titleFontColor:"#000",bodyFontColor:"#000",backgroundColor:"#fff",cornerRadius:3,intersect:!1},plugins:{legend:{display:!1}},scales:{x:{display:!1,grid:{display:!1}},y:{display:!1,grid:{display:!1}}},title:{display:!1,text:"Normal Legend"}}});var e=document.getElementById("areaChart2");e.height="300";var a=e.getContext("2d");new Chart(e,{type:"line",data:{labels:["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],datasets:[{label:"Market value",data:[24,18,28,21,32,28,30],backgroundColor:"transparent",borderColor:"#09ad95",pointBackgroundColor:"#fff",pointHoverBackgroundColor:"#09ad95",pointBorderColor:"#09ad95",pointHoverBorderColor:"#09ad95",pointBorderWidth:2,lineTension:.3,pointRadius:2,pointHoverRadius:2,borderWidth:4}]},options:{responsive:!0,maintainAspectRatio:!1,tooltips:{mode:"index",titleFontSize:12,titleFontColor:"#000",bodyFontColor:"#000",backgroundColor:"#fff",cornerRadius:3,intersect:!1},plugins:{legend:{display:!1}},scales:{x:{display:!1,grid:{display:!1}},y:{display:!1,grid:{display:!1}}},title:{display:!1,text:"Normal Legend"}}})});
