<div class="back-container">
    <a class="back-link" href="<?php echo site_url('users/'); ?>"><< Back</a>
</div>
<div class="card">
    <h2><?php echo $title; ?></h2>

    <?php echo form_open('users/create', array("id" => "contact_form")); ?>

    <label for="name">Name</label>
    <input type="text" name="name" />
    <br />
    <label for="email">Email</label>
    <input type="text" name="email" />
    <br />

    <label for="birth_date">Date of Birth</label>
    <input type="date" name="birth_date"/>
    <br />

    <label for="favorite_color">Favorite Color</label>
    <input type="color" name="favorite_color"/>
    <br />

    <input type="submit" name="submit" class="submit" id="submit_button" value="Create" />

    </form>

    <?php echo validation_errors(); ?>
</div>

<script>
    // $(document).ready(function(){
    //     $.validator.addMethod("validDate", function(value, element){
    //         var selectedDate = new Date(value);
    //         var today = new Date();
    //         return today > selectedDate;
    //     });
    //
    //     $("#contact_form").validate({
    //         rules: {
    //             name: {
    //                 required: true,
    //                 maxlength: 128
    //             },
    //             email: {
    //                 required: true,
    //                 maxlength: 128,
    //                 email: true
    //             },
    //             birth_date: {
    //                 required: true,
    //                 validDate: true
    //             },
    //             favorite_color: {
    //                 required: true,
    //                 maxlength: 25
    //             }
    //         },
    //         messages: {
    //             name: {
    //                 required: "Name required",
    //                 maxlength: "The Name cannot be larger than 128"
    //             },
    //             email: {
    //                 required: "Email required",
    //                 maxlength: "The Email cannot be larger than 128",
    //                 email: "Must be a valid Email"
    //             },
    //             birth_date: {
    //                 required: "Birth Date required",
    //                 validDate: "The Birth Date cannot be after today"
    //             },
    //             favorite_color: {
    //                 required: "Favorite Color required",
    //                 maxlength: "The Color cannot be larger than 25"
    //             }
    //         },
    //         errorElement: "span",
    //         errorPlacement: function(error, element) {
    //             error.appendTo(element.parent());
    //         },
    //         submitHandler: function(){
    //             $(form).ajaxSubmit({
    //                 complete: function(event) {
    //                     debugger;
    //                     $('html').css('cursor', 'default');
    //                     $('#submit_button').prop('disabled', false);
    //                 }
    //             });
    //         }
    //
    //     });
    // });
</script>
