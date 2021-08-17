using System;

namespace ConsoleApplicationTest
{
    public static class Program
    {
        private static void Main()
        {
            static double F(double x)
            {
                return 0.1 * Math.Pow(x, 3) - 2 * Math.Pow(x, 2)+10*x;
            }


            double a, b, e;
            Console.Write("a= ");
            a = Convert.ToDouble(Console.ReadLine());
            Console.Write("step= ");
            b = Convert.ToDouble(Console.ReadLine());
            Console.Write("e= ");
            e = Convert.ToDouble(Console.ReadLine());
            double Func, Func1, i = 0;
            Func = F(a);
            bool s = false;
            do
            {
                Func1 = Func;
                a += b;
                Func = F(a);
                if (Func>Func1)
                {
                    a += b;
                    Func = F(a);
                }
                else
                {
                    s = true;
                }
                i++;
                Console.WriteLine($"x={a}\nFunc(a)={F(a)}\nI={i}");
            }
            while (s != true);

            
            Console.ReadKey();
        }


    }
}    
