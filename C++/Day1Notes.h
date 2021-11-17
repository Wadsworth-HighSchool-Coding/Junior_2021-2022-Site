#include <iostream>


void day1(void)
{
std::cout << "Hello World!\n";
  //variable declarations
  int x = 0;
  float y = 0;

  x = 3;
  y = 3.14;
  char myLetter = 'A';
  std::string phase = "this is a phase";
  int array[5] = {1,2,2,3,5};
  //display the variables
  std::cout<<"the value of x is "<<x<<std::endl;
  std::cout<<"the value of y is "<<y<<std::endl;
  std::cout<<"the value of myLetter is "<<myLetter<<std::endl;
  std::cout<<"the value of phase is "<<phase<<std::endl;
  
  for(int i=0; i<5;i++)
  {
    std::cout<<"the values of array["<<i<<"] is "<<array[i]<<std::endl;
  }

  int my2DimArray[5][5];

  for(int i=0; i<5;i++)
  {
    for(int j=0; j<5;j++)
    {
      std::cout<<"the values of array["<<i<<"]["<<j<<"] is "<<my2DimArray[i][j]<<std::endl;
    }
    
  }  
  
}