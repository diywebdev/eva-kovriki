class PricelistGroup extends Ajax{
    constructor() {
        super();

    };

    setGroup(obj){
        this.title_am = obj.title_am;
        this.title_ru = obj.title_ru;
        this.title_en = obj.title_en;
        this.id = obj.id;
        this.pos = obj.pos;
        this.list = obj.list;
        var _this = this;
        if(this.list.length){
            var list = new Array();
            $.each(_this.list,function (i,e) {
                var l = new PricelistList();
                l.setList(e);
                list.push(l);
            })
            _this.list = list;
        }
    }

    async save(){
        await this.post("/admin_pricelist/updata_group",this);
    }

    async delete(){
        await this.get("/admin_pricelist/delete_group/" + this.id);
    }

    async add(){
        await this.post("/admin_pricelist/save_group",this);
    }
}