function keyValuePairs(line) {
    let keySearch = line
        .slice(-1)[0];
    let keyValueArr = line
        .slice(0, -1)
        .map(parseKeyValuePairs);

    return printResult(dictionary(keyValueArr), keySearch);

    function parseKeyValuePairs(str) {
        let tokens = str.split(' ');
        let result = {
            key: tokens[0],
            value: tokens[1]
        };
        return result;
    }

    function dictionary(keyValueArr) {
        let dict = {};
        for (let element of keyValueArr){
            if  (!dict[element.key]){
                dict[element.key] = [];
            }
            dict[element.key] = element.value;
        }
        return dict;
    }

    function printResult(dict, keySearch) {
        if (dict[keySearch]){
            console.log(dict[keySearch]);
        } else {
            console.log("None");
        }
    }
}

let input  = ('key value\n' +
    'key eulav\n' +
    'test tset\n' +
    'key\n').trim().split('\n');
keyValuePairs(input);