

      // var a = document.querySelectorAll(".likeicon i");
      // for (var i = 0, length = a.length; i < length; i++) {
      //   a[i].onclick = function() {
      //     var b = document.querySelector(".likeicon li.active");
      //     if (b) b.classList.remove("active");
      //     this.parentNode.classList.add('active');
      //   };
      // }
       

<script type="text/javascript">
    $(document).ready(function () {
    $('#tabs').tabs();

    $('.open-tab').click(function (event) {
        var tab = $(this).attr('href');
        $('#tabs').tabs('select', tab);
    });
});
</script>