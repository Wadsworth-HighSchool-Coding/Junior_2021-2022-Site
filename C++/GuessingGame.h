//
// Created by TANK1_41 on 11/30/2021.
//
#include "time.h"
#ifndef C___GUESSINGGAME_H
#define C___GUESSINGGAME_H

#endif //C___GUESSINGGAME_H

int getInteger(short int& value) {
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
    return value;
}

void guessingGame(){
    short int Max,Min;
    std::cout<<"welcome to my Guessing Game\n"<<std::endl;
    std::cout<<"what is the min and the max number you want:"<<std::endl;
    //gets min and max values
    do{
        std::cout<<"Min: ";
        getInteger(Min);
        std::cout<<std::endl<<"Max: ";
        getInteger(Max);
        if(Max<=Min)
            std::cout<<"The Minimum cant be greater than the Max, and both numbers are greater then zero"<<std::endl;
    }while(Max <= Min && (Max-Min)>=0);

    //create a constant random number
    srand(time(NULL));
    const short int randomNum = rand() % Max;
    std::cout<<"\nGuess a random number "<<Min<<" to "<<Max<<": "<<std::endl;

    //variable for holding guess
    short int value = 0;

    //label right before getting use input
    enter_num:
    //get user input as an integer
    getInteger(value);
    //check if guess was right, if so says you win, else makes user try again/ jumps to enter_num label
    if(value == randomNum)
        std::cout<<"Correct you win!"<<std::endl;
    else {
        std::cout << "Wrong try again: " << std::endl;
        goto enter_num;
    }
}

