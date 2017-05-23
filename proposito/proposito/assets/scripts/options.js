jQuery(function () {
    // Create a new media frame
  
    frame = wp.media({
        title: 'Select or Upload Media'
        , button: {
            text: 'Use this media'
        }
        , multiple: false // Set to true to allow multiple files to be selected
    });
    
 
    jQuery("#pt_uploadlogoimgbtn").click(function (e) {
        
        e.preventDefault();
        frame.open();
        frame.on('select', function () {
            var attachment = frame.state().get('selection').first().toJSON();
            jQuery("input[name=pt_inputlogoimg]").val(attachment.url);
        })
    });
    
    frame1 = wp.media({
        title: 'Select or Upload Media'
        , button: {
            text: 'Use this media'
        }
        , multiple: false // Set to true to allow multiple files to be selected
    });
    jQuery("#pt_uploadsliderimg1btn").click(function (e) {
        
        e.preventDefault();
        frame1.open();
        frame1.on('select', function () {
            var attachment = frame1.state().get('selection').first().toJSON();
            jQuery("input[name=pt_inputsliderimg1]").val(attachment.url);
        })
    });
    
    
       frame2 = wp.media({
        title: 'Select or Upload Media'
        , button: {
            text: 'Use this media'
        }
        , multiple: false // Set to true to allow multiple files to be selected
    });
    
    jQuery("#pt_uploadsliderimg2btn").click(function (e) {
        
        e.preventDefault();
        frame2.open();
        frame2.on('select', function () {
            var attachment = frame2.state().get('selection').first().toJSON();
            jQuery("input[name=pt_inputsliderimg2]").val(attachment.url);
        })
    });
    
     
       frame3 = wp.media({
        title: 'Select or Upload Media'
        , button: {
            text: 'Use this media'
        }
        , multiple: false // Set to true to allow multiple files to be selected
    });
    
    jQuery("#pt_uploadsliderimg3btn").click(function (e) {
        
        e.preventDefault();
        frame3.open();
        frame3.on('select', function () {
            var attachment = frame3.state().get('selection').first().toJSON();
            jQuery("input[name=pt_inputsliderimg3]").val(attachment.url);
        })
    });
    
    
        frame4 = wp.media({
        title: 'Select or Upload Media'
        , button: {
            text: 'Use this media'
        }
        , multiple: false // Set to true to allow multiple files to be selected
    });
    jQuery("#pt_uploadsliderimg4btn").click(function (e) {
        
        e.preventDefault();
        frame4.open();
        frame4.on('select', function () {
            var attachment = frame4.state().get('selection').first().toJSON();
            jQuery("input[name=pt_inputsliderimg4]").val(attachment.url);
        })
    });
    
    
      frame5 = wp.media({
        title: 'Select or Upload Media'
        , button: {
            text: 'Use this media'
        }
        , multiple: false // Set to true to allow multiple files to be selected
    });
    jQuery("#pt_uploadsliderimg5btn").click(function (e) {
        
        e.preventDefault();
        frame5.open();
        frame5.on('select', function () {
            var attachment = frame5.state().get('selection').first().toJSON();
            jQuery("input[name=pt_inputsliderimg5]").val(attachment.url);
        })
    });

   
     jQuery('input[type="radio"]').click(function() {
       if(jQuery(this).attr('id') == 'image_slider_radio_btn') {
            jQuery('#pt_silderimageinputs').show();           
       }

       else {
            jQuery('#pt_silderimageinputs').hide();   
       }
   });
    
      jQuery('#footer-thankyou,#footer-upgrade').hide();
});

