jQuery(document).ready(function(e){e(".add-fa-icon").on("click",function(a){a.preventDefault(),e("#fa-field-modal").show()}),e(".fa-field-modal-close").on("click",function(){e("#fa-field-modal").hide()}),e(".fa-field-modal-icon-holder").on("click",function(){var a=e(this).data("icon"),i=e(".fa-field-metabox .fa-field-current-icon .icon"),f=e(".fa-field-metabox .fa-field-current-icon .delete"),l=e(".fa-field-metabox #fa_field_icon"),o=e(".fa-field-modal-close");i.html('<i class="fa '+a+'" />'),f.addClass("active"),l.val(a),o.trigger("click")}),e(".fa-field-metabox .fa-field-current-icon .icon").on("click",function(){{var a=e(".fa-field-metabox .fa-field-current-icon .icon"),i=e(".fa-field-metabox .fa-field-current-icon .delete"),f=e(".fa-field-metabox #fa_field_icon");e(".fa-field-modal-close")}a.html(""),i.removeClass("active"),f.val("")})});