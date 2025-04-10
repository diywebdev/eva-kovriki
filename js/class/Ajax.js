class Ajax {
    async post(url, data) {
        return new Promise(resolve => {
            $.post(url,data, function(callBack) {
                return resolve(callBack);
            },"json");
        });
    };
    async get(url) {
        return new Promise(resolve => {
            $.getJSON(url, function(callBack) {
                return resolve(callBack);
            });
        });
    };


    postImage(url, formData) {
        return new Promise(resolve => {
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(callBack) {
                    console.log(callBack);
                    return resolve(callBack);
                },
                error: function(data) {
                    console.error("ERROR");
                }
            });
        });
    }
};