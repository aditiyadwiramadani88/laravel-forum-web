
    </body>
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/editor.js')}}"></script>
    <script src="{{asset('js/alert.js')}}"></script>


@if(session('msg'))
<script> 
  swal("Sucess", "{{session('msg')}}", "success");
</script>
@endif    

@if(session('msg-err'))
<script> 
  swal("Error", "{{session('msg-err')}}", "error");
</script>
@endif    
    <script>
  
        $('.id_q').hide()
        $('.detail_q').hide()
        $('.content').each((index, elem) => {
            let text = elem.innerHTML
            let count = 200;
            let result = text.slice(0, count) + (text.length > count ? "..." : "");
            elem.innerHTML = result
        })
   

        $('.your_question').each((index, elem) => { 

          let id_q = $(elem).html()

          $(elem).click(() => { 
            swal("Action", {
          buttons: {
            danger: { 
              text: 'delete'
            },
            cancel: true,
            edit: {
              text: "Edit",
              value: "edit",
            },
            detail: {
              text: "Detail",
              value: "detail",
            },
          },
        })
          .then((value) => {
            switch (value) {
              case "edit":
                location.href = 'edit_question/'+ $(id_q+'p').html()
                break;
              case "detail":
                location.href = 'detail_question/'+ $(id_q+'p').html()
                break;
                case 'danger':
          
                  location.href = "{{url('delete_question')}}/"+$(id_q+ '>p').html()
                  break
  }
});
      })
        })





        function action_answere(id, content, quetion) { 

          
          swal("Action", {
          buttons: {
            danger: { 
              text: 'delete'
            },
            cancel: true,
            edit: {
              text: "Edit",
              value: "edit",
            },
       
          },
        })
          .then((value) => {
            switch (value) {
              case "edit":
                
                $('form').attr('action', "{{url('edit_answere')}}/"+id)
                $('form').focus()
                $('#content').val(content)
                break;
                case 'danger':
                  location.href = `{{url('delete_answere')}}/${id}/${quetion}`
                  break
  }
});

        }


    
    </script>