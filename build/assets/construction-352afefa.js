$(function(t){var s=new Date;s.setDate(s.getDate()+2),$("#countdown").countdown(s,function(a){$(this).html(a.strftime('<div class="timer-wrapper"><div class="time">%D</div><span class="text">days</span></div><div class="timer-wrapper"><div class="time">%H</div><span class="text">hrs</span></div><div class="timer-wrapper"><div class="time">%M</div><span class="text">mins</span></div><div class="timer-wrapper"><div class="time">%S</div><span class="text">sec</span></div>'))})});
