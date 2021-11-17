#include <iostream>

void findNumInArray()
{
  //declare variables and find size of array
  int fNumber = 0;
  std::cout<<"What number do you want to find: "<<std::endl;
  int testScores[] = {24,26,39,100,240,199,3,5,78,82,50,41,91,21,33,55,76};
  int size = sizeof(testScores)/sizeof(testScores[0]);
  //check if user inputs a integer or not
  if(!(std::cin>>fNumber))
  {
    do
      {
        
          std::cout<<"Please input a integer"<<std::endl;
          std::cin.clear();//clears error flag on cin
          std::cin.ignore(1000,'\n');//clears rest of input line
          if(std::cin>>fNumber)
          {
            break;
          }
          
      }while(!(std::cin>>fNumber));
  }
  
//for loop checks for where the number is and displays it
  for(int i = 0; i<size;i++)
  {
    if(testScores[i] == fNumber)
    {
      std::cout<<"The number is on array index of "<<i<<std::endl;
      break;
    }else if(i==(size-1))
    {
      std::cout<<"That number is not in the array"<<std::endl;
    }
  }
  
}
