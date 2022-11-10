function TestMonthlySum(){
    const Categories = [350, 50, 200, 150, 500, 400, 100, 25]
    let Sum = 0;
    for(let i = 0; i < Categories.length; i++){
        Sum = Sum + Categories[i];
    }
    print(Sum);
}