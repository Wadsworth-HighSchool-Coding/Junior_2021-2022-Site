#include <utility>
#include <iostream>
int leastToGreat(int array[],int size)
{
    for(int i=0;i<size;i++)
    {
        for(int j=i+1;j<size;j++)
        {
            if(array[i]>array[j])
            {
                int temp=array[i];
                array[i]=array[j];
                array[j]=temp;
            }
        }
    }
    for(int i = 0;i<size;i++){
        std::cout<<array[i]<<","<<std::endl;
    }
  return 0;
}