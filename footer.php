<?php wp_footer(); ?>
</body>
<script>
    $(".smaimg li").mouseover(function(){
        $(this).siblings().removeClass("on");
        $(this).addClass("on");
        var preNumber=$(this).prevAll().size()+1;
        $(".bigimg li").removeClass("on");
        $(".bigimg li:nth-child("+preNumber+")").addClass("on");
    });
</script>
</html>