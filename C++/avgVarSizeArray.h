#include <iostream>

void findSizeArray(void)
{
  int *array, size;
  std::cout<<"Enter array size: "<<std::endl; 
  std::cin>>size;
  array = new int [size];
  std::cout<<"Enter array elements"<<std::endl;

  for(int i = 0; i < size; i++)
  {
    std::cin>>array[i];
  }

  std::cout<<"The array elements are: ";

  for(int i = 0; i < size; i++)
  {
    std::cout<<array[i]<<", ";
  }
  std::cout<<std::endl;

  delete []array;
}