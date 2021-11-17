#include <iostream>

void greaterThanArray(){

  int array[] = {24,26,39,100,240,199,3,5,78,82,50,41,91,21,33,55,76};
  //gets size of array
  int size = sizeof(array)/sizeof(array[0]);
  int value;
  int counter = 0;
  std::cout<<"Greater than what number:"<<std::endl;
  //check if user inputs a integer or not
  if(!(std::cin>>value))
  {
    do
      {
          std::cout<<"Please input a integer"<<std::endl;
          std::cin.clear();//clears error flag on cin
          std::cin.ignore(1000,'\n');//clears rest of input line
          if(std::cin>>value)
          {
            break;
          }
          
      }while(!(std::cin>>value));
  }
  //runs though array
  
  for(int i = 0;i<size;i++)
  {
    //dispalys greater than values
    if(array[i]>value)
    {
      counter++;
    }
  }
  std::cout<<"Thier are "<<counter<<" numbers greater than "<< value<<std::endl;
  //creates an array based on number of values
  int* Garray  = new int [counter];
  //adds all items to new array
  for(int i = 0,j=0;i<size;i++)
  {
    //dispalys greater than values
    if(array[i]>value)
    {
      Garray[j] = array[i];
      j++;
    }
  }

  //puts array in order from least to greatest
  
  //displays all of the items in array
  std::cout<<"\nSo all of the values are: \n"<<std::endl;
  for(int i = 0;counter>i;i++)
  {
    std::cout<<Garray[i]<<",";
  }
  //clean up 
  delete []Garray;
  
}


