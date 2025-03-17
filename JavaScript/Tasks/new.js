const fs = require("fs");
let file = 'copy2.json';
fs.readFile(file, 'utf8', function (err, data) {
    let jsonData = JSON.parse(data);


    jsonData.sheet1.forEach(item => {
        for(let key in item){
            if(typeof item[key] === "string"){
                item[key] = item[key].replace(/ /g, "-");
            }
        }
    });
     
   let finalData = JSON.stringify(jsonData, null, 4);
    fs.writeFile(file, finalData, 'utf8', function (err, data) {
        if(err){
            throw err;
        }
        else{
            console.log("JSON Updated Successfully");
        }
    });
});