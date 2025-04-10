class PriceHtml extends Ajax{

    prepend(group){

        var tpl = $(".acordionForClone").clone();

        $(tpl).find(".groupTitleAM").keyup(function () {
            group.title_am = $(this).text();
        });

        $(tpl).find(".groupTitleRU").keyup(function () {
            group.title_ru = $(this).text();
        });

        $(tpl).find(".groupTitleEN").keyup(function () {
            group.title_en = $(this).text();
        });

        $(tpl).find(".removeGroup").click(function () {
            $(tpl).remove();
        });

        $(tpl).find(".saveGroupBtn").click(function () {
            group.add();
        });

        $(tpl).find(".addList").remove();

        $(tpl).removeClass("acordionForClone");
        $("#accordionBox").prepend(tpl);
    }

    apendGroup(group){
        var _this = this;
        var tpl = $(".acordionForClone").clone();
        $(tpl).find(".groupTitleAM").text(group.title_am);
        $(tpl).find(".groupTitleRU").text(group.title_ru);
        $(tpl).find(".groupTitleEN").text(group.title_en);

        $(tpl).find(".groupTitleAM").keyup(function () {
            group.title_am = $(this).text();
        });

        $(tpl).find(".groupTitleRU").keyup(function () {
            group.title_ru = $(this).text();
        });

        $(tpl).find(".groupTitleEN").keyup(function () {
            group.title_en = $(this).text();
        });
        
        $(tpl).find(".saveGroupBtn").click(function () {
            group.save();
        });

        $(tpl).find(".removeGroup").click(function () {
            if(comfirm("DELETE ?? ")){
                $(tpl).remove();
                group.delete();
            }
        });

        $(tpl).find(".addList").click(function () {
            var list_ = $(".cartForClone").clone();
            $(list_).removeClass("cartForClone");
            var list = new PricelistList();
            list.group_id = group.id;

            $(list_).find(".listTitleAM").keyup(function () {
                list.title_am = $(this).text();
            });

            $(list_).find(".listTitleRU").keyup(function () {
                list.title_ru = $(this).text();
            });

            $(list_).find(".listTitleEN").keyup(function () {
                list.title_en = $(this).text();
            });

            $(list_).find(".listId").keyup(function () {
                list.pos = $(this).text();
            });

            $(list_).find(".saveListBtn").click(function () {
                list.add();
            });

            $(list_).find(".removeList").click(function () {
                $(list_).remove();
            });

            $(tpl).append(list_);
        });

        $.each(group.list,function (i,list) {
            let l = _this.appendList(list);
            $(tpl).append(l);
        });

        $(tpl).removeClass("acordionForClone");
        $("#accordionBox").append(tpl);
    }

    appendList(list){
        var _this = this;
        var tpl = $(".cartForClone").clone();
        $(tpl).removeClass("cartForClone");
        $(tpl).find(".listTitleAM").text(list.title_am);
        $(tpl).find(".listTitleRU").text(list.title_ru);
        $(tpl).find(".listTitleEN").text(list.title_en);
        $(tpl).find(".listId").text(list.pos);

        $(tpl).find(".listTitleAM").keyup(function () {
            list.title_am = $(this).text();
        });

        $(tpl).find(".listTitleRU").keyup(function () {
            list.title_ru = $(this).text();
        });

        $(tpl).find(".listTitleEN").keyup(function () {
            list.title_en = $(this).text();
        });

        $(tpl).find(".listId").keyup(function () {
            list.pos = $(this).text();
        });

        $(tpl).find(".saveListBtn").click(function () {
            list.save();
        });

        $(tpl).find(".removeList").click(function () {
            if(confirm("DELETE ?? ")){
                list.delete();
                $(tpl).remove();
            }
        });


        var price_box = $(tpl).find(".priceList");
        $(tpl).find(".addPrice").click(function () {
            var newPrice = new Price();
            let pri = _this.appendPrice(newPrice);
            $(price_box).prepend(pri);
            $(pri).addClass("new_price");
            $(pri).find(".priceNameAM").keyup(function () {
                newPrice.title_am = $(this).text();
            });

            $(pri).find(".priceNameRU").keyup(function () {
                newPrice.title_ru = $(this).text();
            });

            $(pri).find(".priceNameEN").keyup(function () {
                newPrice.title_en = $(this).text();
            });

            $(pri).find(".priceId").keyup(function () {
                newPrice.pos = $(this).text();
            });

            $(pri).find(".priceSum").keyup(function () {
                newPrice.price = $(this).text();
            });

            $(pri).find(".savePriceBtn").click(function () {
                newPrice.list_id = list.id;
                var id = newPrice.add();
                newPrice.id = id;
                $(pri).removeClass("new_price");
            });
        })

        $.each(list.price,function (i,p) {
            var pri = _this.appendPrice(p);
            $(price_box).append(pri);
        });

        return tpl;
    }

    appendPrice(price){

        var tpl = $(".priceItemForClone").clone();
        $(tpl).removeClass("priceItemForClone");
        $(tpl).find(".priceNameAM").text(price.title_am);
        $(tpl).find(".priceNameRU").text(price.title_ru);
        $(tpl).find(".priceNameEN").text(price.title_en);
        $(tpl).find(".priceSum").text(price.price);
        $(tpl).find(".priceId").text(price.pos);

        $(tpl).find(".priceNameAM").keyup(function () {
            price.title_am = $(this).text();
        });

        $(tpl).find(".priceNameRU").keyup(function () {
            price.title_ru = $(this).text();
        });

        $(tpl).find(".priceNameEN").keyup(function () {
            price.title_en = $(this).text();
        });

        $(tpl).find(".priceId").keyup(function () {
            price.pos = $(this).text();
        });

        $(tpl).find(".priceSum").keyup(function () {
            price.price = $(this).text();
        });

        $(tpl).find(".savePriceBtn").click(function () {
            price.save();
        });
        
        $(tpl).find(".removePriceBtn").click(function () {
            if(confirm("DELETE ??")){
                price.delete();
                $(tpl).remove();
            }
        });

        return tpl;
    }
}