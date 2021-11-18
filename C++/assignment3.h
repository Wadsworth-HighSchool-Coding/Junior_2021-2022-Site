//
// Created by TANK1_41 on 11/18/2021.
//

#ifndef C___ASSIGNMENT3_H
#define C___ASSIGNMENT3_H

#endif //C___ASSIGNMENT3_H

#include <iostream>

void getTwoNumbers(int& value, int& Lvalue){
    std::cout << "What is the lowest value:" << std::endl;
    if (!(std::cin >> value)) {
        do {
            std::cout << "Please input a integer" << std::endl;
            std::cin.clear();//clears error flag on cin
            std::cin.ignore(1000, '\n');//clears rest of input line
            if (std::cin >> value) {
                break;
            }

        } while (!(std::cin >> value));
    }
    std::cout<<"what is the highest value:"<<std::endl;
    if (!(std::cin >> Lvalue)) {
        do {
            std::cout << "Please input a integer" << std::endl;
            std::cin.clear();//clears error flag on cin
            std::cin.ignore(1000, '\n');//clears rest of input line
            if (std::cin >> Lvalue) {
                break;
            }

        } while (!(std::cin >> Lvalue));
    }

}
void andArraySort() {

    int array[] = {56,77,88,99,100,34,25,88,77,55,43,87,99,100,23,45,65,77,75,88};
    //gets size of array
    int size = sizeof(array) / sizeof(array[0]);
    int value, Lvalue;
    int counter = 0;
    //check if user inputs a integer or not
    getTwoNumbers(value,Lvalue);
    while(!(Lvalue>value)){
        std::cout<<"\nThe Highest value is lower than the minimum, Try again:\n "<<std::endl;
        getTwoNumbers(value,Lvalue);
    }
    //runs though array
    for (int i = 0; i < size; i++) {
        //dispalys greater than values
        if ((array[i] >= value) && array[i] <= Lvalue) {
            counter++;
        }
    }
    std::cout << "Their are " << counter << " numbers greater to than or equal " << value <<" and less than or equal to "<<Lvalue<<std::endl;
    //creates an array based on number of values
    int *Garray = new int[counter];
    //adds all items to new array
    for (int i = 0, j = 0; i < size; i++) {
        //dispalys greater than values
        if ((array[i] >= value) && (array[i] <= Lvalue)) {
            Garray[j] = array[i];
            j++;
        }
    }


    //displays all of the items in array
    std::cout << "\nSo all of the values are: \n" << std::endl;
    for (int i = 0; counter > i; i++) {
        std::cout << Garray[i] << ",";
    }
    //clean up
    delete[]Garray;

}

