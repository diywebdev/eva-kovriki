class PriceFactory extends Ajax{
    groups = new Array();
    constructor(priceHtml) {
        super();
        this.priceHtml = priceHtml;
    }

    async getAll(getUrl){
        var _this = this;
        let groups = await this.get(getUrl);

        $.each(groups, function(i, group) {
            let g = new PricelistGroup();
            g.setGroup(group);
            _this.groups.push(g);
        });
        this.apendGroup();
    }

    apendGroup(){
        var _this = this;
        if (this.groups.length) {
            $.each(this.groups,function (i,g) {
                _this.priceHtml.apendGroup(g);
            })

        }
    }
}

