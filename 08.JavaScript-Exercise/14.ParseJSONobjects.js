function parsenJSONobject(line) {

    let pattern = /"*(\w+)"*:"*([\w\/]+)"*/g;
    let matches = [];

    while (matches = pattern.exec(line)){
        let key =  matches[1];
        let value = matches[2]
        key == "name" ? console.log("Name: " + value) : '' ;
        key == "age" ? console.log("Age: " + value) : '' ;
        key == "date" ? console.log("Date: " + value) : '' ;
    }
}

let input  = ('{"name":"Gosho","age":10,"date":"19/06/2005"}\n' +
    '{"name":"Tosho","age":11,"date":"04/04/2005"}\n' +
    '{"name":"Maria","age":24,"date":"31/12/1996"}').split('\n');
parsenJSONobject(input);