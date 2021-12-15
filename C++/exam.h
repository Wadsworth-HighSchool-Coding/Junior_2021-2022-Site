//
// Created by TANK1_41 on 12/14/2021.
//
#include "iostream"
#include "math.h"
#ifndef C___EXAM_H
#define C___EXAM_H

#endif //C___EXAM_H

void addArrayNumbers(void){
    int myNumbers[] = {1,2,3,6,4,3,2,6,7,5,4,3,3,5,6,8,8};
    int size = sizeof(myNumbers) / sizeof(myNumbers[0]);
    int total = 0;
    for(int i = 0; i<size; i++){total += myNumbers[i];}
    std::cout<<"array added together is: "<<total<<std::endl;
}

float findAreaCircle(float r){
    return (M_PI * pow(r,2));
}

int genRandomNum(void){
    srand(time(0));
    return (rand() % 10+1);
}

void whileLoopTest(void){
    short unsigned int input = 0;
    std::cout<<"Enter a number 1 though 10: "<<std::endl;
    while(input<=100){
     std::cin>>input;
     if(input<=100){std::cout<<"try again"<<std::endl;}
    }
}