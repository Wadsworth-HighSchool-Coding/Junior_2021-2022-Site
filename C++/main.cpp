#include<iostream>
#include "Day1Notes.h"
#include "average.h"
#include "avgVarSizeArray.h"
#include "avgAnyNumTestScores.h"
#include "assignment1.h"
#include "assignment2.h"
#include "least-to-greatest.h"
#include "assignment3.h"
#include "Test1StudentCopy.h"
#include "GuessingGame.h"
#include "exam.h"

int main()
{
//lesson 1--------------------------------------------------
    //day1();

//lesson 2 ----------------------------------------------
/*
  float foundAvg = 0;
  std::cout<<"This program will find the average\n";
  getAverage(foundAvg);
  std::cout<<"\nYour average is "<<foundAvg;
*/
//lesson 3-----------------------------------------------
    //findSizeArray();
    //avgAnyNumTestScores();
    //std::cin.get();
//lesson 4--------------------------------------------------
    //findNumInArray();

//assignment2-----------------------------------------
//greaterThanArray();


//assignment3
    //andArraySort();

//Test 1
    //findSumAverageMaxMinFromFile();
//guessing game
   //guessingGame();

//exam 1
    std::cout<<"---Part 1---"<<std::endl;
    addArrayNumbers();

    std::cout<<"---Part 2---"<<std::endl;
    float radius = 5;
    float area = findAreaCircle(radius);
    std::cout<<"The area of the circle is: "<<area<<std::endl;

    std::cout<<"---Part 3---"<<std::endl;
    int randomNum = genRandomNum();
    std::cout<<"random Num is: "<<randomNum<<std::endl;

    std::cout<<"---Part 4---"<<std::endl;
    whileLoopTest();
//funstuff ------------------------------------------------------
// int array[] = {4,6,3,2,1};
// leastToGreat(array,5);
/*
  char name[8] = "braden";

  int tracker[8];

  for(int i = 0;i<8;i++)
  {
    tracker[i] = int(name[i]);
  }
  for(int i = 0;i<8;i++)
  {
    std::cout<<tracker[i]<<std::endl;
  }
  */
    return 0;
}
