#include<stdio.h>
#include<stdlib.h>
int main(int argc, char **argv) {                                         

    int a = 5, b = 8;                                                     
    int v;                                                                

    v = vfork();                                                               
    if(v == 0) {                                                          
        // a = 10                                                         
        a = a + 5;                                                        
        // b = 6                                                          
        b = b - 2;                                                        
        exit(0);                                                          
    }                                                                     
    // Parent code                                                        
    wait();                                                           
    printf("Value of v is %d.\n", v); // line a                           
    printf("Sum is %d.\n", a + b); // line b                              
    exit(0);                                                              

}
