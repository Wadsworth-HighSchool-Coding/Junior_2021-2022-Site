//
// Created by TANK1_41 on 11/19/2021.
//

#ifndef C___TEST1STUDENTCOPY_H
#define C___TEST1STUDENTCOPY_H

#endif //C___TEST1STUDENTCOPY_H

#include <fstream>

void findSumAverageMaxMinFromFile(void)
{
    //section 1-----------------------------------create file variable
    std::ifstream myFile("C:\\xampp\\htdocs\\Junior_2021-2022-Site\\C++\\data2.txt");

    //section 2-----------------------------------test for connection to file
    if( myFile.fail() )
    {
        std::cout<<"file opening failed\n";
        exit(1);
    }

    //section 3-----------------------------------go through the file to find the number of items
    int SIZE = 0;
    int next1;
    // extracts each item in the file 1 line at a time, stores it in "next1", until EOF
    while( myFile >> next1 )
        SIZE++; //counts the number of items found in the file

    //section 4-----------------------------------go back to the start of the file
    //cout<<count_list<<endl;
    myFile.clear(); //reset
    myFile.seekg(0);//point to the beginning of the file again

    //section 5-----------------------------------store the file list in an array
    int *fileList;
    fileList = new int [SIZE]; //THE ARRAY that will store all of the numbers!

    for(int i=0;i<SIZE;i++)
    {
        myFile>>next1;
        fileList[i] = next1; //the numbers in the file getting stored in the array
    }

    /*
    50 point Test (60/50 possible)
      points earned per section below (open notes, no talking!)
      due by the end of class on Monday
      re-takes will be permitted
     */


    //Challenge 1-----------------------------------10 points
    //Display the size of the list
    std::cout<<"There are "<<SIZE<<" numbers in the data file";

    //Challenge 2-----------------------------------20 points
    //Find the largest number in the list
    int max = fileList[0];
    for(int i=0; i<SIZE;i++){
        if(fileList[i]>max){
            max = fileList[i];
        }
    }
    std::cout<<"\nThe max is "<<max<<std::endl;

    //Challenge 3-----------------------------------20 points
    //Search for a user entered number in the list, give the position found
    //You are looking for the first instance of the number in the list
    int value;
    std::cout << "What number do you want:" << std::endl;
    if (!(std::cin >> value)) {
        do {
            std::cout << "Please input a integer" << std::endl;
            std::cin.clear();//clears error flag on cin
            std::cin.ignore(1000, '\n');//clears rest of input line
            if (std::cin >> value) {
                break;
            }

        } while (!(std::cin >> value));
    }

    for(int i=0,tracker=0; i<SIZE;i++){
        if(fileList[i] == value){
            if(tracker == 0){
                std::cout<<"The first instance of the number "<<value<<" is in position "<<i<<std::endl;
                tracker++;
            }else if(tracker == 1){
                std::cout<<"Here are other instances of the number "<<value<<" in positions "<<i;
                tracker++;
            }else{
                std::cout<<","<<i;
            }

        }
    }

    //Challenge 4-----------------------------------10 points
    //Find the average of the numbers in the list
    int average=0;
    for(int i =0;i<SIZE; i++){
        average += fileList[i];
    }
    std::cout<<"\n\nThe average is "<<(average/SIZE)<<std::endl;
}