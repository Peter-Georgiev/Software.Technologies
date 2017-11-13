function storingObject(line) {

    let pattern = /(\w+).+?([0-9]+).+?([\.0-9]+)/g;
    let matches = [];

    while (matches = pattern.exec(line)){
        console.log("Name: " + matches[1]);
        console.log("Age: " + matches[2]);
        console.log("Grade: " + matches[3]);
    }
}

let input  = ('Pesho -> 13 -> 6.00\n' +
    'Ivan -> 12 -> 5.57\n' +
    'Toni -> 13 -> 4.90\n').split('\n');
storingObject(input);
