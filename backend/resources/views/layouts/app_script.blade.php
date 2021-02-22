<script>
  $(function(){
    $(".post_del_btn").click(function(){
      if(confilm("削除しますか？")){
      }else{
        return false;
      }
    });
  });
</script>