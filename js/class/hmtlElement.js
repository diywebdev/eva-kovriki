class hmtlElement {
    constructor(tplBox, parentBox) {
        this.tplBox = tplBox;
        this.parentBox = parentBox;
    };
    apendImages(elements) {
        var this_ = this;
        $.each(elements, function(i, element) {
            this_.apendImage(element);
        });
    };
    apendImage(element) {
        var this_ = this;
        let tpl = $(this.tplBox).clone(true);
        $(tpl).find('.imgItem').attr('img_id', element.id);
        $(tpl).find('.imgItem').css('background-image', "url('/uploads/t/" + element.name + "')");
        $(tpl).find('.imgId').text('#' + element.pos);
        $(tpl).find('.btnRemove').click(async function() {
            this_.deleteModalOpen(async function(){
                if (await element.deleteImage()) {
                    $(tpl).remove();
                    this_.deleteModalClose();
                } else {
                    console.error("ERROR");
                }
            })
        });
        $(tpl).find('.btnEdit').click(function() {
            this_.showEditeImage(element, tpl);
        });
        $(tpl).find('.imgUrl').attr('href', "/uploads/" + element.name);
        $(tpl).removeClass('imgColForClone');
        $(this.parentBox).append(tpl);
        setTimeout(function() {
            $(this.parentBox).find('.opasity_hide').removeClass('opasity_hide');
        }, 10);
    };
    showEditeImage(element, tpl) {
        var modal = $("#editModal");
        var pos_input = $(modal).find("input[name='pos']");
        $(pos_input).val(element.pos);
        $(modal).find(".saveImageBtn").click(async function() {
            element.pos = $(pos_input).val();
            if (await element.updataImage()) {
                $(tpl).find('.imgId').text('#' + element.pos);
                $(modal).modal("hide");
            } else {
                console.error("ERROR");
            }
        })
        $(modal).modal();
    };

    popupUploadedImages(element){
        var modal = $("#addImageModal");
        var list = $(modal).find(".imagePreview");
        var count = $(list).find(".previewImageItem").length;
        $.each(element,function (i,e) {
            let tpl = $(".uploadedImgPreview").clone(true);
            let q = count + i;
            $(tpl).find("img").attr("src","/uploads/t/" + e);
            $(tpl).find("input[name='pos']").attr("name","pos["+q+"]");
            $(tpl).find("input[name='img']").val(e);
            $(tpl).find("input[name='img']").attr("name","img["+q+"]");
            $(tpl).removeClass("uploadedImgPreview");
            $(list).append(tpl);
            $(tpl).find(".previewImageItemRemoveButton").click(function () {
                $(tpl).find("input").removeAttr("name");
                // $(tpl).find("input[name='img']").removeAttr("name");
                $(tpl).hide();
            })
        })

    }

    deleteModalOpen(callback){
        $('#confirmModal').modal();
        $('#confirmModal').find('.btnTrue').click(function(){
            callback();
        });
    }
    deleteModalClose(){
        $('#confirmModal').modal("hide");
    }
};