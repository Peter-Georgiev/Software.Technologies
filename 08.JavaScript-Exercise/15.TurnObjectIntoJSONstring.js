function turnObjectIntoJSONstring(arr) {
    let dict = {};
    arr.map(a => a.split(' -> ')).forEach(tokens => {
       let key = tokens[0];
       let value = isNaN(tokens[1]) ? tokens[1] : Number(tokens[1]);
        dict[key] = value;
    });

    console.log(JSON.stringify(dict));
}

let input = ('name -> Angel\n' +
    'surname -> Georgiev\n' +
    'age -> 20\n' +
    'grade -> 6.00\n' +
    'date -> 23/05/1995\n' +
    'town -> Sofia').split('\n');

turnObjectIntoJSONstring(input);