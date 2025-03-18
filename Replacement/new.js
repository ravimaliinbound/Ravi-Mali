const fs = require("fs");
let file = 'copy.json';
fs.readFile(file, 'utf8', function (err, data) {
    let jsonData = JSON.parse(data);


    let jsonValues = {};
    jsonData.sheet1.forEach(item => {
        for(let key in item){
            if(typeof item[key] === "string"){
                let value = item[key];
                if(jsonValues[value] !== undefined){
                    jsonValues[value]++;
                    item[key] = `${value}-${jsonValues[value]+1}`;
                }
                else{
                    jsonValues[value] = 0;
                    item[key] = value;
                }
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