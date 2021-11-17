#include <iostream>

void avgAnyNumTestScores(void)
{
  int size;
  double testScore = 0;
  std::cout<<"Enter the number of test scores: "<<std::endl; 
  std::cin>>size;
  int* Array  = new int [size];//new takes the type int(4bytes) and multiplies it by size and allocates that amount of memory then assings it to array
  //can also use int Array[size];
  std::cout<<"Enter the test scores: "<<std::endl;

  for(int i = 0; i < size; i++)
  {
    std::cin>>Array[i];
    testScore+=Array[i];
  }
  
  std::cout<<"Average scores is: "<<testScore/size;

  delete []Array;
}