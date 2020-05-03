// display summary on the side on full screen
// summary pop up before checkout
// only appears fields for which data is provided by user

//function: get unique values of an arr
function onlyUnique(value, index, self) { 
    return self.indexOf(value) === index;
}
//function: get unique names arr 
function getNames(inputs){
    let arr = [];
    for (let input of inputs) {
        arr.push(input.name);
    }
    return arr.filter(onlyUnique);
}
//function get select value
function selectGetValue(input){
    if(input.name == "Date_de_naissance[]"){
        let inputSameName = document.getElementsByName(input.name);
        let values = [];
        for (let e of inputSameName){
            values.push(e.options[e.selectedIndex].value);
        };
        return value = values.join().replace(/,/g, "-");
    } else {
        let value = input.options[input.selectedIndex].value;
        if(value != ""){
            return value.replace(/,/g, ", ");
        }
    }
}
//Function get box value
function boxGetValue(input) {
    let inputSameName = document.getElementsByName(input.name);
    let values = [];
    for (let e of inputSameName){
        if(e.checked){
          values.push(e.value);
        }
    };
    return values.join().replace(/,/g, ", ").replace(/_/g, " ");
}
//function duree
function dureeGetValue(input){
    let inputSameName = document.getElementsByName(input.name);
    let unit = [];
    let n = [];
    let values = [];
    for (let e of inputSameName){
        if (e.tagName == "SELECT"){
            unit.push(e.options[e.selectedIndex].value);
        } else {
            n.push(e.value);
        }
    };
    values.push(n, unit);
    if(values[0] == ""){
        return "";
    } else {
        return values.join(" ");
    }
}
//function: hide div if value = ""
function hideIfEmpty(elem, value){
    let containerId = elem.name + "Container";
    let container = document.getElementById(containerId);
    if(value == "" || value == 0){
        container.classList.add('hidden');
    } else {
        container.classList.remove('hidden');
    }
}
//function to trigger the feed in summary
function feedSummary(event) { 
    var elem = event.target;
    let value;
    let summaryTarget = document.getElementById(elem.name);
    if(elem.name == "Durée[]"){
        value = dureeGetValue(elem);
        hideIfEmpty(elem, value);
        summaryTarget.innerHTML = value;
    } else if (elem.tagName == "SELECT"){
        value = selectGetValue(elem);
        hideIfEmpty(elem, value);
        summaryTarget.innerHTML = value;
    } else if (elem.type == "checkbox" || elem.type == "radio"){
        value = boxGetValue(elem);
        hideIfEmpty(elem, value);
        summaryTarget.innerHTML = value;
    } else {
        value = elem.value;
        hideIfEmpty(elem, value);
        summaryTarget.innerHTML = value;
    }
}



