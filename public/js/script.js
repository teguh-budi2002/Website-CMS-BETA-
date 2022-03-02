$(function(){
    var rightJQ = {
      init: function(){
        $('.rightJQ').css({
          overflow: 'hidden'
        });
        // $('.rightJQ').on('mouseover',function(){
        //   $('div', this).stop();
        // });
        // $('.rightJQ').on('mouseout',function(){
        //   $('div', this).animate({
        //     right: '100%'
        //   }, 14000, 'linear' );
        // });
        rightJQ.loop();
      },
      loop: function(){
        $('.rightJQ span').css({
          position: 'relative',
          right: '-100%'
        }).animate({
          right: '100%'
        }, 14000, 'linear', rightJQ.loop);
      }
    };
    rightJQ.init();
  });