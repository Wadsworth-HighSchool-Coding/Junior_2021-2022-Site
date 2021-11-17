#include <utility>
#include <iostream>
int leastToGreat(int array[],int size){

  int* newArray = new int[size];
  
  for(int i = 0,smallest = -999999,j=0; i<size;i++)
  {
    if(array[i] != -999999)
    {
      if(array[i]>smallest){
        smallest = array[i];
        newArray[j] = array[i];
        j++;
        array[i] = -999999;
      }
    }
  }
  //std::cout<<newArray<<std::endl;
  for(int i = 0;size>i;i++)
  {
    
    std::cout<<array[i]<<",";
  }
  std::cout<<"\n";
  for(int i = 0;size>i;i++)
  {
    
    std::cout<<newArray[i]<<",";
  }
  /*
  for(int i = 0;size>i;i++)
  {
    std::cout<<array[i]<<",";
  }
  std::cout<<std::endl<<std::endl;
  
  int smallest = -999999;
  for(int i=0;i<size;i++){

    if(smallest == -999999)
    {
      smallest = array[i];
      //std::cout<<"ran smallest"<<array[i]<<std::endl<<std::endl;
    }else if(smallest>array[i]){
     
      smallest = i;
      std::cout<<"small"<<i<<std::endl;
    } 
    std::cout<<"swaped "<<array[i]<<" with"<<array[smallest]<<std::endl;
    std::swap(array[i],array[smallest]);
    
    smallest = -999999;  
  }

  std::cout<<std::endl;
  for(int i = 0;size>i;i++)
  {
    std::cout<<array[i]<<",";
  }
  */
  return 0;
}