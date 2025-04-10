class Price extends Ajax{
    constructor(obj) {
        super();

    };

    setPrice(obj){
        this.title_am = obj.title_am;
        this.title_ru = obj.title_ru;
        this.title_en = obj.title_en;
        this.id = obj.id;
        this.pos = obj.pos;
        this.list_id = obj.list_id;
        this.price = obj.price;
    }

    async save(){
        await this.post("/admin_pricelist/updata_price",this);
    }

    async add(){
        return await this.post("/admin_pricelist/save_price",this);
    }

    async delete(){
        await this.get("/admin_pricelist/delete_price/" + this.id);
        return true;
    }
}