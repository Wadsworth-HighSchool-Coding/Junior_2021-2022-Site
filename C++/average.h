#include <iostream>

void getAverage(float &average)
{
  const int size = 5;
  float myScores[size];
  for(int i = 0;i<5;i++)
  {
    std::cout<<"\nEnter the "<< i+1<<" score: ";
    std::cin>>myScores[i];
    average += myScores[i];
  }
  average /= 5;
}

